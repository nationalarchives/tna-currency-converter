module.exports = function(grunt) {

    grunt.initConfig({
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
            all: ['test/**/*.html']
        },
        watch: {
            files: ['js/currency-converter.js'],
            tasks:['eslint','concat','uglify','qunit']
        },
        eslint: {
            target: ['js/src/currency-converter.js']
        }
    });


    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-eslint');
    grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.registerTask('default', ['eslint','concat','uglify','qunit','watch']);

};