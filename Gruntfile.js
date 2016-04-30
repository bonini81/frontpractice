module.exports = function(grunt) {
 
 
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    
 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

    
//CSS minification https://github.com/gruntjs/grunt-contrib-cssmin

cssmin: {
  target: {
    files: [{
      expand: true,
      cwd: 'css/*',
      src: ['*.css', '!*.min.css'],
      dest: 'css/',
      ext: '.min.css'
    }]
  }
}

    });
 
    grunt.registerTask('default', ['cssmin'] );
 
};



  