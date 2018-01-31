    <section id="bottom_area">
    
        <?php 
        
            novalite_bottom_content();
            do_action( 'novalite_socials' ); 
            
        ?>
        
        <footer id="footer">
        
            <div class="container">
            
                <div class="row" >
                     
                    <div class="span12 copyright" >
                    
                        <p>
                            <?php if (novalite_setting('novalite_copyright_text')): ?>
                               <?php echo stripslashes(novalite_setting('novalite_copyright_text','html')); ?>
                            <?php else: ?>
                              <?php esc_html_e('@','novalite'); ?> <?php echo get_bloginfo("name"); ?> <?php echo date("Y"); ?> 
                            <?php endif; ?>|<a href="<?php echo esc_url( 'https://github.com/Rruizheng'); ?>" title="<?php esc_attr_e( 'github', 'novalite' ); ?>" rel="generator"><?php printf( esc_html__( ' Github ', 'novalite' ) ); ?></a>
                            |<a href="http://www.jianshu.com/u/97debea9a420" title="<?php esc_attr_e('简书主页','novalite'); ?>"> 简书 </a>
							|<a href="<?php echo esc_url( 'https://juejin.im/user/595f3eb9f265da6c3559a83e/activities'); ?>" title="<?php esc_attr_e( '掘金主页', 'novalite' ); ?>" rel="generator"><?php printf( esc_html__( ' 掘金 ', 'novalite' ) ); ?></a>
                            
                        </p>
                    
                    </div>
                        
                </div>
        
            </div>
        
        </footer>
    
    </section>

</div>

<div id="back-to-top">
<a href="#" style=""><i class="icon-chevron-up"></i></a> 
</div>
    
<?php wp_footer() ?>  
 
</body>

</html>