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
                dest: 'style.css'
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
                    'components-php/featured-box.php': '_haml/featured-box.haml',
                    'components-php/keywords.php': '_haml/keywords.haml',
                    'components-php/items.php': '_haml/items.haml',
                    'components-php/models-lists.php': '_haml/models-lists.haml',
                    'components-php/news-list.php': '_haml/news-list.haml',
                    'components-php/side-menu-list.php': '_haml/side-menu-list.haml',
                    'components-php/shopping-box.php': '_haml/shopping-box.haml',
                    'components-php/sns-box.php': '_haml/sns-box.haml',
                    'index.php': '_haml/index.haml',
                    'single.php': '_haml/single.haml',
                    'archive.php': '_haml/archive.haml',
                    'archive_featured.php': '_haml/archive_featured.haml',
                    'about.php': '_haml/about.haml'

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