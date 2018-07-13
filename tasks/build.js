const argv = require('yargs').argv;
const bin = require('./bin');
const command = require('node-cmd');

const AfterWebpack = require('on-build-webpack');
const BrowserSync = require('browser-sync');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const Watch = require('webpack-watch');

let browserSyncInstance;
const env = argv.e || argv.env || 'local';
const port = argv.p || argv.port || 3000;

module.exports = {
  jigsaw: new AfterWebpack(() => {
    command.get(bin.path() + ' build ' + env, (error, stdout, stderr) => {
      console.log(error ? stderr : stdout);

      if (browserSyncInstance) {
        browserSyncInstance.reload();
      }
    });
  }),

  watch: function(paths) {
    return new Watch({
      options: { ignoreInitial: true },
      paths: paths,
    })
  },

  browserSync: function(proxy) {
    return new BrowserSyncPlugin({
        notify: false,
        port,
        proxy,
        server: proxy ? null : { baseDir: 'build_' + env + '/' },
      },
      {
        reload: false,
        callback: function() {
          browserSyncInstance = BrowserSync.get('bs-webpack-plugin');
        },
      })
  },
};
