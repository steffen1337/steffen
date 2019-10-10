module.exports = function(grunt) {
    require('jit-grunt')(grunt);

    grunt.initConfig({
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "src/less/all.css": "src/less/all.less" // destination file and source file
                }
            }
        },
        watch: {
            styles: {
                files: ['src/less/all.less','src/less/_basics/header.less','src/less/_basics/chat.less','src/less/_basics/contact.less','src/less/_basics/emotion.less','src/less/_basics/global.less','src/less/_basics/projects.less','src/less/_components/cursor.less','src/less/_components/dog.less','src/less/_components/img-slider.less','src/less/_components/offcanvas.less','src/less/_components/toggle-night-day.less','src/less/_components/particle.less','src/less/_variables/color.less','src/less/_variables/input.less','src/less/viewports/viewport.less','src/less/viewports/lg.less','src/less/viewports/md.less','src/less/viewports/sm.less','src/less/viewports/xs.less'],// which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true
                }
            }
        }
    });

    grunt.registerTask('default', ['less', 'watch']);
};
