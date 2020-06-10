module.exports = function(grunt) {
    grunt.initConfig({
        less: {
            development: {
                options: {
                    paths: ["src/less"],
                    yuicompress: true
                },
                files: {
                    "./css/style.css": "./src/less/style.less"
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-less');
};