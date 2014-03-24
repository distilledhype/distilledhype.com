/*global module:false*/
module.exports = function(grunt) {

  grunt.loadTasks('grunt');

  // Default task.
  grunt.registerTask('default', ['jshint']);
  // Scaffold link posts, text posts and grunt tasks.
  grunt.registerTask('lp', ['textfile:linkpost']);
  grunt.registerTask('tp', ['textfile:textpost']);
  grunt.registerTask('gt', ['textfile:grunttask']);
};
