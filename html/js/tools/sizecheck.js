// --- Force clear cookies/localStorage once (Option 2) ---
if (!localStorage.getItem('cookiesCleared')) {
    // Clear cookies
    document.cookie.split(";").forEach(c => {
        document.cookie = c
            .replace(/^ +/, "")
            .replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/");
    });

    // Clear local storage (optional, if you use it)
    localStorage.clear();

    // Mark that we’ve done it, so it doesn’t happen again every reload
    localStorage.setItem('cookiesCleared', 'true');

    // Reload the page so the new version loads cleanly
    location.reload();
}

import { MIN_WINDOW_WIDTH, MIN_WINDOW_HEIGHT } from '../../setup/constants.js';

let baseZoom = null;

export function getZoom() {
    const zoom = window.outerWidth / window.innerWidth;
    if (baseZoom === null) baseZoom = zoom;
    return zoom / baseZoom;
}


function drawDimensionChart() {
    const c = document.getElementById("windowsize");
    const ctx = c.getContext("2d");
    const width = c.width;
    const height = c.height;
    ctx.clearRect(0, 0, width, height);

    // --- Red rectangle: required window size ---
    const rw = Math.floor(width * 0.42);
    const rh = Math.floor(rw * MIN_WINDOW_HEIGHT / MIN_WINDOW_WIDTH);
    const rx0 = Math.floor((width - rw)/2);
    const ry0 = Math.floor((height - rh)/2);

    ctx.strokeStyle = "#990000";
    ctx.fillStyle = "#DD8080";
    ctx.lineWidth = 2;
    ctx.fillRect(rx0, ry0, rw, rh);
    ctx.strokeRect(rx0, ry0, rw, rh);

    // Red label
    const dx = Math.floor(width * 0.1);
    const tx = Math.floor(rx0 + rw + dx);
    const ty = Math.floor(ry0 + rh/2);

    ctx.beginPath();
    ctx.moveTo(rx0 + rw, ty);
    ctx.lineTo(tx - 3, ty);
    ctx.stroke();

    const fs = 12;
    ctx.font = `${fs}px Arial`;
    ctx.fillStyle = "#990000";
    ctx.textAlign = "left";
    ctx.textBaseline = "middle";
    ctx.fillText("Required", tx, ty - fs*0.6);
    ctx.fillText("window size", tx, ty + fs*0.6);

    // --- White rectangle: actual window size ---
    const rw_ = Math.floor(rw * window.innerWidth / MIN_WINDOW_WIDTH);
    const rh_ = Math.floor(rh * window.innerHeight / MIN_WINDOW_HEIGHT);
    const rx0_ = rx0;
    const ry0_ = ry0;

    ctx.strokeStyle = "#000000";
    ctx.fillStyle = "#ffffff";
    ctx.lineWidth = 2;
    ctx.fillRect(rx0_, ry0_, rw_, rh_);
    ctx.strokeRect(rx0_, ry0_, rw_, rh_);

    // White label
    const tx_ = Math.floor(rx0 - dx);
    const ty_ = Math.floor(ry0 + rh_/2);
    ctx.beginPath();
    ctx.moveTo(rx0, ty_);
    ctx.lineTo(tx_ + 3, ty_);
    ctx.stroke();

    ctx.fillStyle = "#000000";
    ctx.textAlign = "right";
    ctx.fillText("Your", tx_, ty_ - fs*0.6);
    ctx.fillText("window size", tx_, ty_ + fs*0.6);
}

export function checkWindowDimension() {
    const zoom = getZoom();
    $('#zoomValue').html(Math.trunc(zoom * 100));

    // Always show main content unless blocked
    $('#content').show();
    $('#dimension-message').hide();
    $('#zoom-message').hide();
    const alpha = 0;
    // Check window size
    if (window.innerWidth < MIN_WINDOW_WIDTH - (MIN_WINDOW_WIDTH * alpha) || window.innerHeight < MIN_WINDOW_HEIGHT - (MIN_WINDOW_HEIGHT * alpha)) {
        drawDimensionChart();
        $('#content').hide();
        $('#dimension-message').show();
        return; // Stop further checks
    }

    // Check zoom level
    if (zoom <= 0.9 || zoom >= 1.1) {
        $('#content').hide();
        $('#zoom-message').show();
        return;
    }
}
