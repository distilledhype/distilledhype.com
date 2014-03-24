module.exports = function(grunt) {

  grunt.config('watch', {
    gruntfile: {
      files: '<%= jshint.gruntfile.src %>',
      tasks: ['jshint:gruntfile']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
};
