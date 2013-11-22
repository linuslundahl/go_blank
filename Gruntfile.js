module.exports = function (grunt) {

  grunt.registerTask('watch', [ 'watch' ]);
  grunt.registerTask('imageNotify', 'imageoptim');

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    jshint: {
      files: ['Gruntfile.js', 'javascripts/custom/*.js'],
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
        src: ['javascripts/custom/*.js'],
        dest: 'javascripts/scripts.js'
      },
    },
    uglify: {
      options: {
        mangle: false,
        compress: true
      },
      dist: {
        files: {
          'javascripts/scripts.min.js': ['javascripts/scripts.min.js']
        }
      }
    },
    imagemin: {
      options: {
        pngquant: true
      },
      dist: {
        files: [{
          expand: true,
          cwd: 'images/src/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'images/dist/'
        }]
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
        files: ['javascripts/custom/*.js'],
        tasks: ['jshint', 'concat:dist', 'uglify:dist']
      },
      images: {
        files: ['images/*.*'],
        tasks: ['imagemin:dist']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
};
