module.exports = function(grunt) {

    grunt.initConfig({
        concat: {
            options: {
                // define a string to put between each file in the concatenated output
                separator: ';'
            },
            dist: {
                // the files to concatenate
                src: ['js/currency-data.js','js/currency-converter.js'],
                // the location of the resulting JS file
                dest: 'js/currency-converter.min.js'
            }
        },
        uglify: {
            dist: {
                files: {
                    'js/currency-converter.min.js': ['js/currency-converter.min.js']
                }
            }
        },
        jshint: {
            files: ['js/currency-converter.js'],
            options: {
                globals: {
                    jQuery: true
                }
            }
        },
        watch: {
            files: ['js/currency-converter.js'],
            tasks: ['jshint']
        },
        eslint: {
            target: ['js/currency-converter.js']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-eslint');
    grunt.registerTask('default', ['jshint','eslint','concat','uglify','watch']);

};