<h1 align="center">Redirect Plugin for <a href="https://flextype.org/">Flextype</a></h1>

<p align="center">
<a href="https://github.com/flextype-plugins/redirect/releases"><img alt="Version" src="https://img.shields.io/github/release/flextype-plugins/redirect.svg?label=version&color=black"></a> <a href="https://github.com/flextype-plugins/redirect"><img src="https://img.shields.io/badge/license-MIT-blue.svg?color=black" alt="License"></a> <a href="https://github.com/flextype-plugins/redirect"><img src="https://img.shields.io/github/downloads/flextype-plugins/redirect/total.svg?color=black" alt="Total downloads"></a> <a href="https://github.com/flextype/flextype"><img src="https://img.shields.io/badge/Flextype-0.9.16-green.svg?color=black" alt="Flextype"></a> <a href=""><img src="https://img.shields.io/discord/423097982498635778.svg?logo=discord&color=black&label=Discord%20Chat" alt="Discord"></a>
</p>

Redirect plugin will help you to know how many readers of every page in your website.

## Dependencies

The following dependencies need to be installed for Redirect Plugin.

| Item | Version | Download |
|---|---|---|
| [flextype](https://github.com/flextype/flextype) | 0.9.16 | [download](https://github.com/flextype/flextype/releases) |
| [twig](https://github.com/flextype-plugins/twig) | >=2.0.0 | [download](https://github.com/flextype-plugins/twig/releases) |

## Installation

1. Download & Install all required dependencies.
2. Create new folder `/project/plugins/redirect`
3. Download Redirect Plugin and unzip plugin content to the folder `/project/plugins/redirect`

## Settings

| Key | Value | Description |
|---|---|---|
| enabled | true | true or false to disable the plugin |
| priority | 100 | Redirect plugin priority |
| redirect | [] | Redirect specific data |

### Usage

You may define unlimited redirects in `project/config/plugins/redirect/settings.yaml`

Here is basic example of simple redirects:

```yaml
redirect:
  -
    from: '/home'
    to: './'
    status: 301
  -
    from: '/'
    to: './en'
    status: 301
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/redirect/blob/master/LICENSE.txt)
Copyright (c) 2021 [Sergey Romanenko](https://github.com/Awilum)
