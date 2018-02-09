module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
                sourcemap: 'none'
            },
            dist: {
                files: {
                    'css/currency.css': 'css/sass/currency-sass.scss'
                }
            }
        },
        cssmin: {
            options: {
                sourceMap: true
            },
            target: {
                files: {
                    'css/currency.min.css': ['css/currency.css']
                }
            }
        },
        concat: {
            options: {
                // define a string to put between each file in the concatenated output
                separator: '\n\n'
            },
            dist: {
                // the files to concatenate
                src: ['js/src/currency-data.js','js/src/currency-converter.js'],
                // the location of the resulting JS file
                dest: 'js/dist/currency-converter-build.js'
            }
        },
        uglify: {
            dist: {
                files: {
                    'js/dist/currency-converter-build.min.js': ['js/dist/currency-converter-build.js']
                }
            }
        },
        qunit: {
            all: ['qunit/test.html']
        },
        eslint: {
            target: ['js/src/currency-converter.js']
        },
        watch: {
            css: {
                files: ['css/sass/*.scss','js/src/currency-converter.js'],
                tasks: ['sass', 'cssmin', 'eslint','concat','uglify','qunit', 'watch']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-eslint');
    grunt.loadNpmTasks('grunt-contrib-qunit');


    // Default task(s).
    grunt.registerTask('default', [
        'sass',
        'cssmin',
        'eslint',
        'concat',
        'uglify',
        'qunit',
        'watch'
    ]);
};