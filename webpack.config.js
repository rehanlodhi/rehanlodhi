// WordPress webpack config.
const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );

// Plugins.
const RemoveEmptyScriptsPlugin = require( 'webpack-remove-empty-scripts' );

// Utilities.
const path = require( 'path' );

// Add any new entry points by extending the webpack config.
module.exports = {
    ...defaultConfig,
    ...{
        entry: {
            //'js/theme': path.resolve(process.cwd(), 'src/js/theme.js'),
            'css/theme': path.resolve(process.cwd(), 'src/styles/theme.scss'),
        },
        output: {
            ...defaultConfig.output,
            path: path.resolve( process.cwd(), 'assets' )
        },
        plugins: [
            ...defaultConfig.plugins,

            new RemoveEmptyScriptsPlugin( {
                stage: RemoveEmptyScriptsPlugin.STAGE_AFTER_PROCESS_PLUGINS
            } )
        ]
    }
};