module.exports = function(grunt) {

  grunt.config('textfile', {
    options: {
      templateDir: 'site/templates',
      dest: 'content/01-blog',
      openFile: true
    },
    linkpost: {
      options: {
        template: 'kirby-linkpost.tpl',
        urlFormat: 'PREFIX-SLUG/article.link.txt'
      }
    },
    textpost: {
      options: {
        template: 'kirby-textpost.tpl',
        urlFormat: 'PREFIX-SLUG/article.text.txt'
      }
    },
    grunttask: {
      options: {
        dest: 'grunt',
        template: 'grunt-task.tpl',
        urlFormat: 'SLUG.js'
      }
    }
  });

  grunt.loadNpmTasks('grunt-textfile');
};
