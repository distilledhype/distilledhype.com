/*global module:false*/
module.exports = function(grunt) {

  grunt.loadTasks('grunt');

  // Default task.
  grunt.registerTask('default', ['jshint']);
  grunt.registerTask('lp', ['textfile:linkpost']);
  grunt.registerTask('tp', ['textfile:textpost']);
};
