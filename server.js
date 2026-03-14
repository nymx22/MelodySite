/**
 * Local dev server with clean URL support (matches _redirects for Cloudflare Pages).
 * Run: node server.js  (or: npm run dev)
 * Then open http://127.0.0.1:5501
 */
const http = require("http");
const fs = require("fs");
const path = require("path");

const PORT = 5501;
const CLEAN_URLS = {
  "/home": "home.html",
  "/about": "about.html",
  "/contact": "contact.html",
  "/always-aching-sometimes-mending": "always-aching-sometimes-mending.html",
  "/nightmares": "nightmares.html",
  "/aasm-gallery": "aasm-gallery.html",
};

const MIME = {
  ".html": "text/html",
  ".css": "text/css",
  ".js": "application/javascript",
  ".json": "application/json",
  ".png": "image/png",
  ".jpg": "image/jpeg",
  ".jpeg": "image/jpeg",
  ".gif": "image/gif",
  ".svg": "image/svg+xml",
  ".ico": "image/x-icon",
  ".ttf": "font/ttf",
  ".woff": "font/woff",
  ".woff2": "font/woff2",
  ".pdf": "application/pdf",
};

const server = http.createServer((req, res) => {
  let urlPath = req.url.split("?")[0];
  if (urlPath === "/") {
    urlPath = "/index.html";
  } else if (CLEAN_URLS[urlPath]) {
    urlPath = "/" + CLEAN_URLS[urlPath];
  } else if (!path.extname(urlPath)) {
    urlPath = urlPath + ".html";
  }

  const filePath = path.join(__dirname, urlPath);

  fs.readFile(filePath, (err, data) => {
    if (err) {
      if (err.code === "ENOENT") {
        res.writeHead(404, { "Content-Type": "text/plain" });
        res.end("Not Found");
      } else {
        res.writeHead(500);
        res.end("Server Error");
      }
      return;
    }

    const ext = path.extname(filePath);
    const contentType = MIME[ext] || "application/octet-stream";
    res.writeHead(200, { "Content-Type": contentType });
    res.end(data);
  });
});

server.listen(PORT, () => {
  console.log(`Dev server: http://127.0.0.1:${PORT}`);
  console.log("Clean URLs: /home, /about, /contact, etc.");
});
