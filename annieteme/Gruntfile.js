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
                    'components-php/header02.php': '_haml/header02.haml',
                    'components-php/header03.php': '_haml/header03.haml',
                    'components-php/footer.php': '_haml/footer.haml',
                    'components-php/featured-box.php': '_haml/featured-box.haml',
                    'components-php/keywords.php': '_haml/keywords.haml',
                    'components-php/items.php': '_haml/items.haml',
                    'components-php/models-lists.php': '_haml/models-lists.haml',
                    'components-php/news-list.php': '_haml/news-list.haml',
                    'components-php/recommend-list.php': '_haml/recommend-list.haml',
                    'components-php/side-menu-list.php': '_haml/side-menu-list.haml',
                    'components-php/shopping-box.php': '_haml/shopping-box.haml',

                    'components-php/wrote-models-box.php': '_haml/wrote-models-box.haml',
                    'components-php/article-sns-btns.php': '_haml/article-sns-btns.haml',
                    'components-php/related-article.php': '_haml/related-article.haml',
                    'components-php/more-search-article.php': '_haml/more-search-article.haml',
                    'components-php/sns-box.php': '_haml/sns-box.haml',
                    'components-php/this-page-tags.php': '_haml/this-page-tags.haml',
                    'components-php/category-popular.php': '_haml/category-popular.haml',
                    'components-php/total-popular.php': '_haml/total-popular.haml',
                    'components-php/news-articles.php': '_haml/news-articles.haml',
                    'components-php/featured_articles.php': '_haml/featured_articles.haml',
                    'components-php/breadcrumb.php': '_haml/breadcrumb.haml',
                    'components-php/header-sp.php': '_haml/header-sp.haml',
                    'components-php/footer-sp.php': '_haml/footer-sp.haml',
                    'components-php/amazon-ad-sky.php': '_haml/amazon-ad-sky.haml',



                    'index.php': '_haml/index.haml',
                    'single.php': '_haml/single.haml',
                    'archive.php': '_haml/archive.haml',
                    'archive_featured.php': '_haml/archive_featured.haml',
                    'about.php': '_haml/about.haml',
                    'policy.php': '_haml/policy.haml',
                    'rules.php': '_haml/rules.haml',
                    'search.php': '_haml/search.haml',
                    'category.php': '_haml/category.haml',
                    'tag.php': '_haml/tag.haml',
                    'single-featured.php': '_haml/single-featured.haml',
                    '404.php': '_haml/404.haml'

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
