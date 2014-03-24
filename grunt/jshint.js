module.exports = function(grunt) {

  grunt.config('jshint', {
    options: {
      curly: true,
      eqeqeq: true,
      immed: true,
      latedef: true,
      newcap: true,
      noarg: true,
      sub: true,
      undef: true,
      unused: true,
      boss: true,
      eqnull: true,
      browser: true,
      globals: {
        jQuery: true
      }
    },
    gruntfile: {
      src: 'Gruntfile.js'
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
};
