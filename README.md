# rushpartners.co.uk

[![wercker status](https://app.wercker.com/status/d58cfc440476d066c599613c5321dce8/m/master "wercker status")](https://app.wercker.com/project/byKey/d58cfc440476d066c599613c5321dce8)

## About the app

The website is built on [Jigsaw](http://jigsaw.tighten.co/) and uses [TailwindCSS](https://tailwindcss.com/).

When developing on the project, create a feature branch for your update. Once complete, create a PR for your feature branch into `develop` once approved and working in staging, a PR should be created for `develop` to `master`.

## Getting started

To get started, clone this repository and navigate to it.

```bash
git clone git@github.com:rushpartners/rushpartners.co.uk.git
cd rushpartners.co.uk
```

Ensure all dependencies are installed.

```bash
composer install && npm install
```

Once complete, you will be able to work with the application using browsersync by running

```bash
npm run watch
```

## Deployment

Deployment is handled automatically by [Wercker](http://wercker.com/) on commit to develop and master.

## License

Copyright (c) 2018 Rush Partners Ltd.