

let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'dist').setPublicPath('dist');

/*
let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist');


const { assertSupportedNodeVersion } = require('../src/Engine');

module.exports = async () => {
    process.noDeprecation = true;

    assertSupportedNodeVersion();

    const mix = require('../src/Mix').primary;

    require(mix.paths.mix());

    await mix.installDependencies();
    await mix.init();

    return mix.build();
};
*/