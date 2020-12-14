module.exports = function (grunt) {
    const sass = require("node-sass");
    grunt.initConfig({
        concat: {
            dist: {
                src: ["components/scripts/*.js"],
                dest: "dist/js/scripts.js",
            },
        }, //concat js

        uglify: {
            options: {
                sourceMap: true,
            },
            dist: {
                files: [
                    {
                        src: "dist/js/scripts.js",
                        dest: "dist/js/scripts.min.js",
                    },
                ],
            },
        }, //uglify js

        sass: {
            options: {
                implementation: sass,
                sourceMap: true,
                outputStyle: "compressed",
            },
            dist: {
                files: [
                    {
                        src: "components/scss/styles.scss",
                        dest: "dist/css/styles.min.css",
                    },
                ],
            },
        }, //sass

        autoprefixer: {
            options: {
                browsers: ["last 4 versions"],
                map: true,
            },
            files: {
                src: "dist/css/*.css",
                dest: "",
            },
        }, //autoprefixer

        watch: {
            options: {
                spawn: false,
                livereload: true,
            },
            scripts: {
                files: ["components/js/*.js", "components/scss/*.scss"],
                tasks: ["concat", "uglify", "sass", "autoprefixer"],
            },
        }, //watch
    }); //initConfig

    grunt.loadNpmTasks("grunt-contrib-concat");
    grunt.loadNpmTasks("grunt-contrib-uglify-es");
    grunt.loadNpmTasks("grunt-sass");
    grunt.loadNpmTasks("grunt-autoprefixer");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.registerTask("default", [
        "concat",
        "uglify",
        "sass",
        "autoprefixer",
        "watch",
    ]);
}; //wrapper function
