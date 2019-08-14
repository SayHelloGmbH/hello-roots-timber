# Project Description

This repository contains files for integration to the boilerplate WordPress theme [Hello Roots](https://github.com/SayHelloGmbH/hello-roots) by [Say Hello GmbH](https://sayhello.ch).

# Getting started

This code is distributed under the GNU General Public License v3.0. Or in short: **It's open source**.
You are free to use this code or only parts of it for personal and commercial use!

## Install Timber

[Timber](https://www.upstatement.com/timber/) helps you create fully-customized WordPress themes faster with more sustainable code. With Timber, you write your HTML using the [Twig Template Engine](https://twig.symfony.com/) separately from your PHP files.

Ideally, you should [install Timber](https://timber.github.io/docs/getting-started/setup/) as a requirement in your Theme through your Composer dependencies. 
Although Timber is currently available as a WordPress plugin, the library will probably only be available through Composer in future versions.

```bash
composer require timber/timber
```

## Copy files from this repository

Download and unzip this repository, then copy the files into the Theme folder you created using Hello Roots. You should do this **before** you start making any modifications to your new Theme.

If you're using Timber and Twig partials, you probably won't need to use the PHP files in the _partials_ folder of Hello Roots, so you can delete them.

# Authors

- [Mark Howells-Mead](https://github.com/markhowellsmead/)
- [Unsplash and contributors](https://www.upstatement.com/timber/) (authors of the Timber library)
