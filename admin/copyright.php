<?php if(!defined('__TYPECHO_ADMIN__')) exit; ?>

<div class="booadmin-copyright-overlay" id="booadminCopyrightOverlay"></div>

<footer id="admin-footer" class="flex-shrink-0 py-4 text-center text-xs text-discord-muted bg-gray-50 border-t border-gray-200" role="contentinfo">
    <div class="mb-2">
        <span><a href="https://typecho.org" class="font-medium hover:text-discord-accent transition-colors" target="_blank" rel="noopener noreferrer">Typecho</a></span>
        <span class="mx-2 text-gray-300">&bull;</span>
        <span><?php _e('由 <a href="https://typecho.org" class="hover:text-discord-accent" target="_blank" rel="noopener">%s</a> 驱动, 版本 %s', $options->software, $options->version); ?></span>
        <span class="mx-2 text-gray-300">&bull;</span>
        <span>Theme by <span class="booadmin-copyright-tooltip">
            <a href="https://github.com/gongbangrui/TypechoAdmin" class="font-medium hover:text-discord-accent transition-colors" target="_blank" rel="noopener">Gbr's Blog</a>
            <div class="booadmin-copyright-popup" id="booadminCopyrightPopup">
                <button class="close-btn" onclick="closePopup(); event.stopPropagation();">&times;</button>
                <h3>关于 Gbr's Blog 程序</h3>
                <div class="version">版本 1.3.1</div>
                <div class="content">
                    <div class="left">
                        <p class="main-copy"><strong>Gbr's Blog 是免费开源项目。</strong>项目的开源维护与新功能更新离不开您的支持。</p>
                        <ul class="support-points">
                            <li><strong>开源维护成本：</strong>进行版本适配、问题修复、体验优化与 LTS 支持。</li>
                        </ul>
                        <div class="action">
                            <a href="https://github.com/gongbangrui/TypechoAdmin" target="_blank" rel="noopener">访问项目仓库</a>
                        </div>
                    </div>
                    <div class="right">
                        <div class="donation-card">
                            <img src="<?php $options->adminStaticUrl('img', 'supportme.png'); ?>" alt="支持 Gbr's Blog 开源维护" />
                        </div>
                    </div>
                </div>
            </div>
            </span>
        </span>
    </div>
    <nav class="space-x-3 text-gray-400">
        <a href="https://docs.typecho.org" class="hover:text-discord-accent transition-colors" target="_blank" rel="noopener"><?php _e('帮助文档'); ?></a>
        <span>|</span>
        <a href="https://forum.typecho.org" class="hover:text-discord-accent transition-colors" target="_blank" rel="noopener"><?php _e('支持论坛'); ?></a>
        <span>|</span>
        <a href="https://github.com/typecho/typecho/issues" class="hover:text-discord-accent transition-colors" target="_blank" rel="noopener"><?php _e('报告错误'); ?></a>
        <span>|</span>
        <a href="https://typecho.org/download" class="hover:text-discord-accent transition-colors" target="_blank" rel="noopener"><?php _e('资源下载'); ?></a>
    </nav>
</footer>

<script>
    function togglePopup() {
        const popup = document.getElementById('booadminCopyrightPopup');
        const overlay = document.getElementById('booadminCopyrightOverlay');
        popup.classList.toggle('show');
        overlay.classList.toggle('show');
    }
    
    function openPopup() {
        const popup = document.getElementById('booadminCopyrightPopup');
        const overlay = document.getElementById('booadminCopyrightOverlay');
        if (!popup.classList.contains('show')) {
            popup.classList.add('show');
            overlay.classList.add('show');
        }
    }
    
    function closePopup() {
        const popup = document.getElementById('booadminCopyrightPopup');
        const overlay = document.getElementById('booadminCopyrightOverlay');
        popup.classList.remove('show');
        overlay.classList.remove('show');
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        const tooltip = document.querySelector('.booadmin-copyright-tooltip');
        const popup = document.getElementById('booadminCopyrightPopup');
        const overlay = document.getElementById('booadminCopyrightOverlay');
        
        tooltip.addEventListener('click', function(e) {
            e.preventDefault();
            openPopup();
        });
        
        overlay.addEventListener('click', function() {
            closePopup();
        });
        
        popup.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
</script>
