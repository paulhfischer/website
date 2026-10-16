# Website

Paul Fischer's personal profile, served by PHP 8.5 with a Node-based stylesheet build.

## Setup

```console
npm ci
```

## Commands

- `npm run build`: compile and optimize `styles/style.min.css`.
- `npm run watch`: rebuild after Sass or build-tool changes; native directory watching requires macOS or Windows.
- `npm run serve`: serve the page at `http://127.0.0.1:8080` using PHP 8.5.

Serve `index.php`, `images/` and `styles/` together on the PHP host.

Run `npm run check` to build, lint and check formatting.
