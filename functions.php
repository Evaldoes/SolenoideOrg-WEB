<?php
    //chamar a tag title dinamicamente
    function projsol_title_tag(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme','projsol_title_tag');

    //previnir o erro na tag de  titulo em versões antigas do WP
    if(!function_exists('_wp_render_title_tag')){
        function projsol_render_title(){
            ?>
            <title><?php wp_title('|', true, 'right');?></title>
            <?php
        }
        add_action('wp_head', 'projsol_render_title');
    }

    //Definir as miniaturas dos posts
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1280, 720, true);

    //Definir o tamanho do resumo
    add_filter( "excerpt_length", function($length){
        return 40;
    });

    //Registra o Custom Navigtion Walker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    //Registrar os Menus
    register_nav_menus( array(
        'principal' => __('Menu principal', 'Solenoide')
    ));

    //criar siderbar
    register_sidebar(
        array(
            'name' => 'Barra lateral',
            'id' => 'sidebar',
            'before_widget' => '  <div class="widget clearfix"><div class="post-widget"><div class="media"><div class="media-body">',
            'after_widget' => '</div></div></div></div></div>',
            'before_title' => '<h3 class="mt-0" >',
            'after_title' => '</h3><div class="blog-meta">'
    ));

    //Ativar o formulario para comnetários
    function theme_queue_js(){
        if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');
    }
    add_action('wp_print_scripts','theme_queue_js');

    // Personalizar os comentários
    function format_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment; ?>

        <div <?php comment_class('coisachata'); ?> id="comment-<?php comment_ID(); ?>">

            <div class="card mb-3" style="border: 1px solid #168381 !important; margin-bottom: 5px; border-radius: 5px;">
                <div class="card-body" style="margin-left: 15px;">

                    <div class="comment-intro">

                        <h4 class="card-title" style="color: #168381 !important;"><?php printf(__('%s'), get_comment_author_link()) ?> <small>Comentou em <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()) ?> </small></h4>
        
                    
                    </div>

                    <?php comment_text(); ?>

                    <div class="reply">
                        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                    </div>


                </div>
            </div>

        <?php
    }

    // Criar o tipo de post para o banner
    function create_post_type() {

        register_post_type('banners',
        // Definir as opções
        array(
            'labels' => array(
                'name' => __('Banners'),
                'singular_name' => __('Banners')
            ),
            'supports' => array(
                'title', 'editor', 'thumbnail'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt2',
            'rewrite' => array('slug' => 'banners'),
        ));
    }
    //Iniciar o tipo de post
    add_action('init', 'create_post_type');

    
?>