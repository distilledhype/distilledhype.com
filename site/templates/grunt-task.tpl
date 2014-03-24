module.exports = function(grunt) {

  grunt.config('<%= grunt.option('title') %>', {});

  grunt.loadNpmTasks('grunt-<%= grunt.option('title') %>');
};
