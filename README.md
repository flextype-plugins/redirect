# Redirect Plugin for [Rawilum](http://fansoro.org/)
![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square "Version")
![Rawilum](https://img.shields.io/badge/Rawilum-1.x-green.svg?style=flat-square "Fansoro Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/pafnuty-fansoro-plugins/fansoro-plugin-breadcrumb/blob/master/LICENSE)

Simple redirect plugin for Rawilum. It allows you to create a redirects from your pages.

## Install
1. Unzip plugin to the folder `/site/plugins/`
2. Go to `/site/config/site.yml` and add plugin name to plugins section.
3. Save your changes.

Example:
```
...
plugins:
  - Redirect
```

## Usage in the pages
You can simple add new redirect in the frontmatter of your page
```
redirect: new-page
```

## Create several redirects
This plugins allows you to setup several redirects, just go to the `/site/config/site.yml` and create section with your redirects.
```
redirects: 
  old-page: new-page
  another-old-page: https://www.google.com
```

## License 
[MIT](https://github.com/rawilum-plugins/redirect/blob/master/LICENSE)
