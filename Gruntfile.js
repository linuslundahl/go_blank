module.exports = function (grunt) {

  grunt.registerTask('watch', [ 'watch' ]);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    jshint: {
      files: ['Gruntfile.js', 'javascripts/scripts.js'],
      options: {
        // laxcomma: true,
        globals: {
          console: true,
          Drupal: true,
          jQuery: true
        }
      }
    },
    compass: {
      dist: {
        options: {
          config: 'config.rb'
        }
      },
      dev: {}
    },
    concat: {
      dist: {
        options: {
          separator: ';'
        },
        src: ['javascripts/jquery.scripts.js'],
        dest: 'javascripts/jquery.scripts.min.js'
      },
    },
    uglify: {
      options: {
        mangle: false,
        compress: true
      },
      dist: {
        files: {
          'javascripts/jquery.scripts.min.js': ['javascripts/jquery.scripts.min.js']
        }
      }
    },
    watch: {
      options: {
        livereload: true,
      },
      css: {
        files: ['sass/**/*.scss'],
        tasks: ['compass:dist']
      },
      js: {
        files: ['javascripts/jquery.scripts.js'],
        tasks: ['jshint', 'concat:dist', 'uglify:dist']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
};
