<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/communication')) {
            if (0 === strpos($pathinfo, '/communication/api/threads')) {
                // fos_comment_new_threads
                if (0 === strpos($pathinfo, '/communication/api/threads/new') && preg_match('#^/communication/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_new_threads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
                }
                not_fos_comment_new_threads:

                // fos_comment_edit_thread_commentable
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_edit_thread_commentable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
                }
                not_fos_comment_edit_thread_commentable:

                // fos_comment_new_thread_comments
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_new_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_new_thread_comments:

                // fos_comment_remove_thread_comment
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_remove_thread_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
                }
                not_fos_comment_remove_thread_comment:

                // fos_comment_edit_thread_comment
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_edit_thread_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
                }
                not_fos_comment_edit_thread_comment:

                // fos_comment_new_thread_comment_votes
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_new_thread_comment_votes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
                }
                not_fos_comment_new_thread_comment_votes:

                // fos_comment_get_thread
                if (preg_match('#^/communication/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_thread;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread:

                // fos_comment_get_threads
                if (preg_match('#^/communication/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_threads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
                }
                not_fos_comment_get_threads:

                // fos_comment_post_threads
                if (preg_match('#^/communication/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_comment_post_threads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
                }
                not_fos_comment_post_threads:

                // fos_comment_patch_thread_commentable
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_fos_comment_patch_thread_commentable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
                }
                not_fos_comment_patch_thread_commentable:

                // fos_comment_get_thread_comment
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_thread_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread_comment:

                // fos_comment_patch_thread_comment_state
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_fos_comment_patch_thread_comment_state;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
                }
                not_fos_comment_patch_thread_comment_state:

                // fos_comment_put_thread_comments
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_fos_comment_put_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_put_thread_comments:

                // fos_comment_get_thread_comments
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread_comments:

                // fos_comment_post_thread_comments
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_comment_post_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_post_thread_comments:

                // fos_comment_get_thread_comment_votes
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_thread_comment_votes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread_comment_votes:

                // fos_comment_post_thread_comment_votes
                if (preg_match('#^/communication/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_comment_post_thread_comment_votes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
                }
                not_fos_comment_post_thread_comment_votes:

            }

            // aet_annuaire_communication_index
            if (rtrim($pathinfo, '/') === '/communication') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'aet_annuaire_communication_index');
                }

                return array (  '_controller' => 'Aet\\CommunicationBundle\\Controller\\CommunicationController::indexAction',  '_route' => 'aet_annuaire_communication_index',);
            }

            // aet_annuaire_communication_add
            if ($pathinfo === '/communication/add') {
                return array (  '_controller' => 'Aet\\CommunicationBundle\\Controller\\CommunicationController::addAction',  '_route' => 'aet_annuaire_communication_add',);
            }

            // aet_annuaire_communication_categories_index
            if (0 === strpos($pathinfo, '/communication/categories') && preg_match('#^/communication/categories(?:/(?P<categories>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aet_annuaire_communication_categories_index')), array (  '_controller' => 'Aet\\CommunicationBundle\\Controller\\CommunicationController::categoriesIndexAction',  'categories' => 'none',));
            }

            if (0 === strpos($pathinfo, '/communication/search')) {
                // aet_annuaire_communication_search
                if ($pathinfo === '/communication/search') {
                    return array (  '_controller' => 'Aet\\CommunicationBundle\\Controller\\CommunicationController::communicationSearchAction',  '_route' => 'aet_annuaire_communication_search',);
                }

                // aet_annuaire_communication_search_index_erase_aetcommunications
                if ($pathinfo === '/communication/search/eraseaetuserindex') {
                    return array (  '_controller' => 'Aet\\CommunicationBundle\\Controller\\CommunicationController::eraseAetCommunicationIndexAction',  '_route' => 'aet_annuaire_communication_search_index_erase_aetcommunications',);
                }

                // aet_annuaire_communication_search_index_aetcommunications
                if ($pathinfo === '/communication/search/indexaetusers') {
                    return array (  '_controller' => 'Aet\\CommunicationBundle\\Controller\\CommunicationController::indexAetCommunicationsAction',  '_route' => 'aet_annuaire_communication_search_index_aetcommunications',);
                }

            }

            // aet_annuaire_communication_view
            if (preg_match('#^/communication/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aet_annuaire_communication_view')), array (  '_controller' => 'Aet\\CommunicationBundle\\Controller\\CommunicationController::viewAction',));
            }

            // aet_annuaire_communication_edit
            if (0 === strpos($pathinfo, '/communication/edit') && preg_match('#^/communication/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aet_annuaire_communication_edit')), array (  '_controller' => 'Aet\\CommunicationBundle\\Controller\\CommunicationController::editAction',));
            }

            // aet_annuaire_communication_delete
            if (0 === strpos($pathinfo, '/communication/delete') && preg_match('#^/communication/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aet_annuaire_communication_delete')), array (  '_controller' => 'Aet\\CommunicationBundle\\Controller\\CommunicationController::deleteAction',));
            }

        }

        // aet_annuaire_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'aet_annuaire_homepage');
            }

            return array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::indexAction',  '_route' => 'aet_annuaire_homepage',);
        }

        if (0 === strpos($pathinfo, '/page')) {
            // aet_annuaire_page_view
            if (preg_match('#^/page(?:/(?P<urlId>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aet_annuaire_page_view')), array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::PageViewAction',  'urlId' => 'accueil',));
            }

            // aet_annuaire_page_edit
            if (0 === strpos($pathinfo, '/pageedit') && preg_match('#^/pageedit/(?P<urlId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aet_annuaire_page_edit')), array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::PageEditAction',));
            }

        }

        if (0 === strpos($pathinfo, '/aet')) {
            // aet_annuaire_aetlist
            if ($pathinfo === '/aetlist') {
                return array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::AetListAction',  '_route' => 'aet_annuaire_aetlist',);
            }

            if (0 === strpos($pathinfo, '/aetprofile')) {
                // aet_annuaire_aetprofile_view
                if (0 === strpos($pathinfo, '/aetprofileview') && preg_match('#^/aetprofileview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aet_annuaire_aetprofile_view')), array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::ViewAetProfileAction',));
                }

                // aet_annuaire_aetprofile_edit
                if (0 === strpos($pathinfo, '/aetprofileedit') && preg_match('#^/aetprofileedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aet_annuaire_aetprofile_edit')), array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::EditAetProfileAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // aet_annuaire_Login_disp
            if ($pathinfo === '/logdisp') {
                return array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::LoginAetAction',  '_route' => 'aet_annuaire_Login_disp',);
            }

            // aet_annuaire_Login
            if ($pathinfo === '/log') {
                return array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::LoginBisAction',  '_route' => 'aet_annuaire_Login',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // aet_annuaire_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_aet_annuaire_contact;
            }

            return array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::contactAction',  '_route' => 'aet_annuaire_contact',);
        }
        not_aet_annuaire_contact:

        // aet_annuaire_register
        if ($pathinfo === '/register') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_aet_annuaire_register;
            }

            return array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::registerAction',  '_route' => 'aet_annuaire_register',);
        }
        not_aet_annuaire_register:

        if (0 === strpos($pathinfo, '/search')) {
            // aet_annuaire_search_index_erase_aetusers
            if ($pathinfo === '/search/eraseaetuserindex') {
                return array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::eraseAetUserIndexAction',  '_route' => 'aet_annuaire_search_index_erase_aetusers',);
            }

            // aet_annuaire_search_index_aetusers
            if ($pathinfo === '/search/indexaetusers') {
                return array (  '_controller' => 'Aet\\AnnuaireBundle\\Controller\\DefaultController::indexAetUsersAction',  '_route' => 'aet_annuaire_search_index_aetusers',);
            }

        }

        if (0 === strpos($pathinfo, '/_console/_console')) {
            // console
            if ($pathinfo === '/_console/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/_console/commands') && preg_match('#^/_console/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
