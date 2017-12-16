/**
 * Created by yuka on 12/5/17.
 */
module.exports = function (grunt) {

    grunt.initConfig({

        //package.jsonを取得
        pkg: grunt.file.readJSON('package.json'),

        //タスクの設定（grunt-contrib-sass）
        sass: {
            styles: {
                //SCSSファイルを指定
                src: '_scss/style.scss',
                //CSSを書きだしファイルを指定
                dest: 'css/style.css'
            }
        },

        //タスクの設定（grunt-contrib-watch）
        watch: {
            sass: {
                //変更を監視するファイルを指定
                files: ['_scss/*.scss'],
                //変更されたらどのタスクを実行するか指定
                tasks: [ 'sass' ]
            },
            haml: {
                //変更を監視するファイルを指定
                files: ['_haml/*.haml'],
                //変更されたらどのタスクを実行するか指定
                tasks: [ 'haml' ]
            }
        },

        haml: {

            dist: {
                files: {
                    'components-php/header.php': '_haml/header.haml',
                    'components-php/footer.php': '_haml/footer.haml',
                    'index.php': '_haml/index.haml'
                }
            }

        }



    });

    // プラグインの読み込み
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-haml');

    grunt.registerTask('default', [ 'sass', 'haml' ]);

};