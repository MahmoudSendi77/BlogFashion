<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/follow')) {
            // follow_default_index
            if ('/follow' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FollowBundle\\Controller\\DefaultController::indexAction',  '_route' => 'follow_default_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_follow_default_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'follow_default_index'));
                }

                return $ret;
            }
            not_follow_default_index:

            if (0 === strpos($pathinfo, '/follow/follower')) {
                // follower_index
                if ('/follow/follower' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'FollowBundle\\Controller\\FollowerController::indexAction',  '_route' => 'follower_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_follower_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'follower_index'));
                    }

                    return $ret;
                }
                not_follower_index:

                // follower_new
                if ('/follow/follower/new' === $pathinfo) {
                    return array (  '_controller' => 'FollowBundle\\Controller\\FollowerController::newAction',  '_route' => 'follower_new',);
                }

                // follower_show
                if (preg_match('#^/follow/follower/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'follower_show']), array (  '_controller' => 'FollowBundle\\Controller\\FollowerController::showAction',));
                }

                // follower_edit
                if (preg_match('#^/follow/follower/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'follower_edit']), array (  '_controller' => 'FollowBundle\\Controller\\FollowerController::editAction',));
                }

                // follower_delete
                if (preg_match('#^/follow/follower/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'follower_delete']), array (  '_controller' => 'FollowBundle\\Controller\\FollowerController::deleteAction',));
                }

            }

            // follow_homepage
            if ('/follow1' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FollowBundle\\Controller\\DefaultController::indexAction',  '_route' => 'follow_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_follow_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'follow_homepage'));
                }

                return $ret;
            }
            not_follow_homepage:

        }

        elseif (0 === strpos($pathinfo, '/forum')) {
            // forum_homepage
            if ('/forum/homeSujet' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\SujetController::homeSujetAction',  '_route' => 'forum_homepage',);
            }

            if (0 === strpos($pathinfo, '/forum/recherche')) {
                // forum_recherche
                if ('/forum/recherche' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\SujetController::rechercheAction',  '_route' => 'forum_recherche',);
                }

                // forum_rechercheC
                if ('/forum/rechercheC' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\SujetController::rechercheCAction',  '_route' => 'forum_rechercheC',);
                }

            }

            // delete
            if (0 === strpos($pathinfo, '/forum/delete') && preg_match('#^/forum/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete']), array (  '_controller' => 'ForumBundle\\Controller\\SujetController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/forum/deleteC')) {
                // deleteC
                if (preg_match('#^/forum/deleteC/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteC']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireSuController::deleteCAction',));
                }

                // delete_categorie
                if (0 === strpos($pathinfo, '/forum/deleteCat') && preg_match('#^/forum/deleteCat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_categorie']), array (  '_controller' => 'ForumBundle\\Controller\\CategorieSuController::deleteCatAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/forum/update')) {
                // forum_update
                if (preg_match('#^/forum/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'forum_update']), array (  '_controller' => 'ForumBundle\\Controller\\SujetController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/forum/updateComment')) {
                    // comment_update
                    if (preg_match('#^/forum/updateComment/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'comment_update']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireSuController::updateCommentAction',));
                    }

                    // comment_update_admin
                    if (0 === strpos($pathinfo, '/forum/updateCommentAdmin') && preg_match('#^/forum/updateCommentAdmin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'comment_update_admin']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireSuController::updateCommentAdminAction',));
                    }

                }

                // update_categorie
                if (0 === strpos($pathinfo, '/forum/updateCat') && preg_match('#^/forum/updateCat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_categorie']), array (  '_controller' => 'ForumBundle\\Controller\\CategorieSuController::updateCatAction',));
                }

                // update_sujet_Admin
                if (0 === strpos($pathinfo, '/forum/updatesujetAdmin') && preg_match('#^/forum/updatesujetAdmin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_sujet_Admin']), array (  '_controller' => 'ForumBundle\\Controller\\SujetController::updatesujetAdminAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/forum/create')) {
                // forum_create
                if ('/forum/create' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\SujetController::createAction',  '_route' => 'forum_create',);
                }

                if (0 === strpos($pathinfo, '/forum/createComment')) {
                    // comment_create
                    if (preg_match('#^/forum/createComment/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'comment_create']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireSuController::createCommentAction',));
                    }

                    // comment_create_admin
                    if (0 === strpos($pathinfo, '/forum/createCommentAdmin') && preg_match('#^/forum/createCommentAdmin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'comment_create_admin']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireSuController::createCommentAdminAction',));
                    }

                }

                // create_categorie
                if ('/forum/createCat' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\CategorieSuController::createCatAction',  '_route' => 'create_categorie',);
                }

                // create_sujet_Admin
                if ('/forum/createsujetAdmin' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\SujetController::createsujetAdminAction',  '_route' => 'create_sujet_Admin',);
                }

            }

            elseif (0 === strpos($pathinfo, '/forum/chart')) {
                // chart_stat
                if ('/forum/chart' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\ChartSuController::chartAction',  '_route' => 'chart_stat',);
                }

                // chart_statClient
                if ('/forum/chartClient' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\ChartSuController::chartClientAction',  '_route' => 'chart_statClient',);
                }

            }

            elseif (0 === strpos($pathinfo, '/forum/showC')) {
                // show_comment_client
                if (0 === strpos($pathinfo, '/forum/showCommentClient') && preg_match('#^/forum/showCommentClient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'show_comment_client']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireSuController::showCommentClientAction',));
                }

                // show_comment_admin
                if (0 === strpos($pathinfo, '/forum/showCommentAdmin') && preg_match('#^/forum/showCommentAdmin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'show_comment_admin']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireSuController::showCommentAdminAction',));
                }

                // show_categorie
                if ('/forum/showCategorie' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\CategorieSuController::showCategorieAction',  '_route' => 'show_categorie',);
                }

            }

            // supp_commmobile
            if (0 === strpos($pathinfo, '/forum/suppcomm') && preg_match('#^/forum/suppcomm/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'supp_commmobile']), array (  '_controller' => 'ForumBundle\\Controller\\MobileController::suppcommAction',));
            }

            // my_sujet
            if ('/forum/mySubject' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\SujetController::mySubjectAction',  '_route' => 'my_sujet',);
            }

            if (0 === strpos($pathinfo, '/forum/mo')) {
                if (0 === strpos($pathinfo, '/forum/mobsujet')) {
                    // affiche_mobile
                    if ('/forum/mobsujet' === $pathinfo) {
                        return array (  '_controller' => 'ForumBundle\\Controller\\MobileController::afficheSujetMobileAction',  '_route' => 'affiche_mobile',);
                    }

                    // ajout_mobile
                    if ('/forum/mobsujetadd' === $pathinfo) {
                        return array (  '_controller' => 'ForumBundle\\Controller\\MobileController::newAction',  '_route' => 'ajout_mobile',);
                    }

                    // find_mobile
                    if (0 === strpos($pathinfo, '/forum/mobsujetfind') && preg_match('#^/forum/mobsujetfind/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'find_mobile']), array (  '_controller' => 'ForumBundle\\Controller\\MobileController::findAction',));
                    }

                    // supp_mobile
                    if (0 === strpos($pathinfo, '/forum/mobsujetsupp') && preg_match('#^/forum/mobsujetsupp/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'supp_mobile']), array (  '_controller' => 'ForumBundle\\Controller\\MobileController::suppAction',));
                    }

                    // modif_mobile
                    if (0 === strpos($pathinfo, '/forum/mobsujetmodif') && preg_match('#^/forum/mobsujetmodif/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'modif_mobile']), array (  '_controller' => 'ForumBundle\\Controller\\MobileController::modifAction',));
                    }

                }

                // affiche_commmobile
                if ('/forum/mobcomm' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\MobileController::affichecommentaireMobileAction',  '_route' => 'affiche_commmobile',);
                }

                // modif_commmobile
                if (0 === strpos($pathinfo, '/forum/modifcomm') && preg_match('#^/forum/modifcomm/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'modif_commmobile']), array (  '_controller' => 'ForumBundle\\Controller\\MobileController::modifcommAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/forum/findcomm')) {
                // find_commentmobile
                if (preg_match('#^/forum/findcomm/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'find_commentmobile']), array (  '_controller' => 'ForumBundle\\Controller\\MobileController::findcommAction',));
                }

                // find_commsujetmobile
                if (0 === strpos($pathinfo, '/forum/findcommsujet') && preg_match('#^/forum/findcommsujet/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'find_commsujetmobile']), array (  '_controller' => 'ForumBundle\\Controller\\MobileController::findcommsujetAction',));
                }

            }

            // ajout_commmobile
            if ('/forum/newcomm' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\MobileController::newcommAction',  '_route' => 'ajout_commmobile',);
            }

            // affichecateg_mobile
            if ('/forum/afficheCategMobile' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\MobileController::afficheCategMobileAction',  '_route' => 'affichecateg_mobile',);
            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ask')) {
                if (0 === strpos($pathinfo, '/ask/AskBundle/homeask')) {
                    // AskBundle_homeask_index
                    if ('/ask/AskBundle/homeask' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'AskBundle\\Controller\\AskController::indexAction',  '_route' => 'AskBundle_homeask_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_AskBundle_homeask_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'AskBundle_homeask_index'));
                        }

                        return $ret;
                    }
                    not_AskBundle_homeask_index:

                    // AskBundle_homeask_index1
                    if ('/ask/AskBundle/homeask//index1' === $pathinfo) {
                        return array (  '_controller' => 'AskBundle\\Controller\\AskController::index1Action',  '_route' => 'AskBundle_homeask_index1',);
                    }

                    // AskBundle_homeask_new
                    if ('/ask/AskBundle/homeask//new' === $pathinfo) {
                        return array (  '_controller' => 'AskBundle\\Controller\\AskController::newAction',  '_route' => 'AskBundle_homeask_new',);
                    }

                    // AskBundle_homeask_show
                    if (0 === strpos($pathinfo, '/ask/AskBundle/homeask/') && preg_match('#^/ask/AskBundle/homeask//(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'AskBundle_homeask_show']), array (  '_controller' => 'AskBundle\\Controller\\AskController::showAction',));
                    }

                    // AskBundle_homeask_edit
                    if (0 === strpos($pathinfo, '/ask/AskBundle/homeask/') && preg_match('#^/ask/AskBundle/homeask//(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'AskBundle_homeask_edit']), array (  '_controller' => 'AskBundle\\Controller\\AskController::editAction',));
                    }

                    // AskBundle_homeask_delete
                    if ('/ask/AskBundle/homeask//delete' === $pathinfo) {
                        return array (  '_controller' => 'AskBundle\\Controller\\AskController::deleteAction',  '_route' => 'AskBundle_homeask_delete',);
                    }

                    // AskBundle_homeask_block
                    if ('/ask/AskBundle/homeask//newblock' === $pathinfo) {
                        return array (  '_controller' => 'AskBundle\\Controller\\AskController::blockAction',  '_route' => 'AskBundle_homeask_block',);
                    }

                    // AskBundle_homeask_deblock
                    if ('/ask/AskBundle/homeask//newdeblock' === $pathinfo) {
                        return array (  '_controller' => 'AskBundle\\Controller\\AskController::deblockAction',  '_route' => 'AskBundle_homeask_deblock',);
                    }

                }

                // ask_default_index
                if ('/ask' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AskBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ask_default_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_ask_default_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ask_default_index'));
                    }

                    return $ret;
                }
                not_ask_default_index:

                if (0 === strpos($pathinfo, '/ask1')) {
                    if (0 === strpos($pathinfo, '/ask1/a')) {
                        if (0 === strpos($pathinfo, '/ask1/askhomep')) {
                            // ask_homep
                            if (preg_match('#^/ask1/askhomep/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ask_homep']), array (  '_controller' => 'AskBundle\\Controller\\AskController::indexAction',));
                            }

                            // ask_homep1
                            if ('/ask1/askhomep1' === $pathinfo) {
                                return array (  '_controller' => 'AskBundle\\Controller\\AskController::index1Action',  '_route' => 'ask_homep1',);
                            }

                            // ask_showask2
                            if ('/ask1/askhomepp1' === $pathinfo) {
                                return array (  '_controller' => 'AskBundle\\Controller\\AskController::showAction',  '_route' => 'ask_showask2',);
                            }

                        }

                        // ask_deleteask
                        if (0 === strpos($pathinfo, '/ask1/askdel') && preg_match('#^/ask1/askdel/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'ask_deleteask']), array (  '_controller' => 'AskBundle\\Controller\\AskController::deleteEventAction',));
                        }

                        // affiche_ask
                        if ('/ask1/afficheaskMobile' === $pathinfo) {
                            return array (  '_controller' => 'AskBundle\\Controller\\Mobile33Controller::afficheaskMobileAction',  '_route' => 'affiche_ask',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/ask1/makeask')) {
                        // ask_make
                        if (preg_match('#^/ask1/makeask/(?P<msg1>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'ask_make']), array (  '_controller' => 'AskBundle\\Controller\\AskController::faireaskAction',));
                        }

                        // ask_make1
                        if ('/ask1/makeask1' === $pathinfo) {
                            return array (  '_controller' => 'AskBundle\\Controller\\AskController::new7Action',  '_route' => 'ask_make1',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/ask1/ne')) {
                        // newfolow
                        if ('/ask1/newfolow' === $pathinfo) {
                            return array (  '_controller' => 'FollowBundle\\Controller\\FollowerController::newAction',  '_route' => 'newfolow',);
                        }

                        // neeeewask
                        if ('/ask1/neeewask' === $pathinfo) {
                            return array (  '_controller' => 'AskBundle\\Controller\\Mobile33Controller::newMobileaskAction',  '_route' => 'neeeewask',);
                        }

                        // newfoloowteask
                        if ('/ask1/neeewfolowask' === $pathinfo) {
                            return array (  '_controller' => 'AskBundle\\Controller\\Mobile33Controller::newfolowmobileAction',  '_route' => 'newfoloowteask',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/ask1/dele')) {
                        // deletefolow
                        if ('/ask1/deletefolow' === $pathinfo) {
                            return array (  '_controller' => 'FollowBundle\\Controller\\FollowerController::deleteAction',  '_route' => 'deletefolow',);
                        }

                        // deleeeteask
                        if (0 === strpos($pathinfo, '/ask1/deleeeeeteask') && preg_match('#^/ask1/deleeeeeteask/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleeeteask']), array (  '_controller' => 'AskBundle\\Controller\\Mobile33Controller::suppppAction',));
                        }

                        // deleefoloowteask
                        if ('/ask1/deleeeeetefolowask' === $pathinfo) {
                            return array (  '_controller' => 'AskBundle\\Controller\\Mobile33Controller::supfolowAction',  '_route' => 'deleefoloowteask',);
                        }

                    }

                    // block_go
                    if ('/ask1/deblock' === $pathinfo) {
                        return array (  '_controller' => 'AskBundle\\Controller\\AskController::deblockAction',  '_route' => 'block_go',);
                    }

                    // block_make
                    if ('/ask1/block' === $pathinfo) {
                        return array (  '_controller' => 'AskBundle\\Controller\\AskController::blockAction',  '_route' => 'block_make',);
                    }

                    if (0 === strpos($pathinfo, '/ask1/s')) {
                        // show_go
                        if (0 === strpos($pathinfo, '/ask1/show1') && preg_match('#^/ask1/show1/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'show_go']), array (  '_controller' => 'AskBundle\\Controller\\AskController::show2Action',));
                        }

                        // searchprofil
                        if ('/ask1/searchprofil' === $pathinfo) {
                            return array (  '_controller' => 'AskBundle\\Controller\\AskController::searrchAction',  '_route' => 'searchprofil',);
                        }

                        // searchnotif
                        if ('/ask1/searchnotif' === $pathinfo) {
                            return array (  '_controller' => 'AskBundle\\Controller\\AskController::searrchyyAction',  '_route' => 'searchnotif',);
                        }

                    }

                    // findask
                    if (0 === strpos($pathinfo, '/ask1/findask1996') && preg_match('#^/ask1/findask1996/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'findask']), array (  '_controller' => 'AskBundle\\Controller\\Mobile33Controller::allAction',));
                    }

                    // veriffoloowteask
                    if ('/ask1/veriiffolowask' === $pathinfo) {
                        return array (  '_controller' => 'AskBundle\\Controller\\Mobile33Controller::verifierfolowMobileAction',  '_route' => 'veriffoloowteask',);
                    }

                }

            }

            // esprit_api_homepage
            if ('/api/esprit' === $pathinfo) {
                return array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esprit_api_homepage',);
            }

            // all
            if ('/api/tasks/all' === $pathinfo) {
                return array (  '_controller' => 'EspritApiBundle\\Controller\\TaskController::allAction',  '_route' => 'all',);
            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pub')) {
                if (0 === strpos($pathinfo, '/pub/comment')) {
                    // comment_index
                    if ('/pub/comment' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PublicationBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'comment_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_comment_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'comment_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_comment_index;
                        }

                        return $ret;
                    }
                    not_comment_index:

                    // comment_show
                    if (preg_match('#^/pub/comment/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'comment_show']), array (  '_controller' => 'PublicationBundle\\Controller\\CommentaireController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_comment_show;
                        }

                        return $ret;
                    }
                    not_comment_show:

                    // comment_new
                    if ('/pub/comment/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'PublicationBundle\\Controller\\CommentaireController::newAction',  '_route' => 'comment_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_comment_new;
                        }

                        return $ret;
                    }
                    not_comment_new:

                    // comment_edit
                    if (preg_match('#^/pub/comment/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'comment_edit']), array (  '_controller' => 'PublicationBundle\\Controller\\CommentaireController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_comment_edit;
                        }

                        return $ret;
                    }
                    not_comment_edit:

                    // comment_delete
                    if (preg_match('#^/pub/comment/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'comment_delete']), array (  '_controller' => 'PublicationBundle\\Controller\\CommentaireController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_comment_delete;
                        }

                        return $ret;
                    }
                    not_comment_delete:

                    // commentA_index
                    if ('/pub/comment/AdminC' === $pathinfo) {
                        $ret = array (  '_controller' => 'PublicationBundle\\Controller\\CommentaireController::indexAdminCAction',  '_route' => 'commentA_index',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_commentA_index;
                        }

                        return $ret;
                    }
                    not_commentA_index:

                }

                // publication_homepage
                if ('/pub' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'PublicationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'publication_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_publication_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'publication_homepage'));
                    }

                    return $ret;
                }
                not_publication_homepage:

                if (0 === strpos($pathinfo, '/pub/pub')) {
                    // pub_index
                    if ('/pub/pub' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::indexAction',  '_route' => 'pub_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_pub_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pub_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_pub_index;
                        }

                        return $ret;
                    }
                    not_pub_index:

                    // pub_show
                    if (preg_match('#^/pub/pub/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'pub_show']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_pub_show;
                        }

                        return $ret;
                    }
                    not_pub_show:

                    // pub_new
                    if ('/pub/pub/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::newAction',  '_route' => 'pub_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_pub_new;
                        }

                        return $ret;
                    }
                    not_pub_new:

                    // pub_edit
                    if (preg_match('#^/pub/pub/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'pub_edit']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_pub_edit;
                        }

                        return $ret;
                    }
                    not_pub_edit:

                    // pub_delete
                    if (preg_match('#^/pub/pub/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'pub_delete']), array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_pub_delete;
                        }

                        return $ret;
                    }
                    not_pub_delete:

                    // pubA_index
                    if ('/pub/pub/Admin' === $pathinfo) {
                        $ret = array (  '_controller' => 'PublicationBundle\\Controller\\PublicationController::indexAdminAction',  '_route' => 'pubA_index',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_pubA_index;
                        }

                        return $ret;
                    }
                    not_pubA_index:

                }

                // affiche_mobiles
                if ('/pub/affichemobile' === $pathinfo) {
                    return array (  '_controller' => 'PublicationBundle\\Controller\\Mobile22Controller::affichePubMobileAction',  '_route' => 'affiche_mobiles',);
                }

                // find_mobiles
                if (0 === strpos($pathinfo, '/pub/findmobile') && preg_match('#^/pub/findmobile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'find_mobiles']), array (  '_controller' => 'PublicationBundle\\Controller\\Mobile22Controller::findmobileAction',));
                }

                // add_mobiles
                if ('/pub/newmobile' === $pathinfo) {
                    return array (  '_controller' => 'PublicationBundle\\Controller\\Mobile22Controller::newmobileAction',  '_route' => 'add_mobiles',);
                }

                // sup_mobiles
                if ('/pub/suppub' === $pathinfo) {
                    return array (  '_controller' => 'PublicationBundle\\Controller\\Mobile22Controller::suppubAction',  '_route' => 'sup_mobiles',);
                }

                // modif_mobiles
                if ('/pub/modifpub' === $pathinfo) {
                    return array (  '_controller' => 'PublicationBundle\\Controller\\Mobile22Controller::modifpubAction',  '_route' => 'modif_mobiles',);
                }

            }

            elseif (0 === strpos($pathinfo, '/product')) {
                // product_homepage
                if ('/product' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ProductBundle\\Controller\\DefaultController::indexAction',  '_route' => 'product_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_product_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'product_homepage'));
                    }

                    return $ret;
                }
                not_product_homepage:

                if (0 === strpos($pathinfo, '/product/index')) {
                    // index
                    if ('/product/index' === $pathinfo) {
                        return array (  '_controller' => 'ProductBundle\\Controller\\ProductController::indexAction',  '_route' => 'index',);
                    }

                    // index_pdf
                    if ('/product/index' === $pathinfo) {
                        return array (  '_controller' => 'ProductBundle\\Controller\\PdfController::indexAction',  '_route' => 'index_pdf',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/product/show')) {
                    if (0 === strpos($pathinfo, '/product/showproduct')) {
                        // show_product
                        if ('/product/showproduct' === $pathinfo) {
                            return array (  '_controller' => 'ProductBundle\\Controller\\ProductController::showProductAction',  '_route' => 'show_product',);
                        }

                        // show_productadmin
                        if ('/product/showproductadmin' === $pathinfo) {
                            return array (  '_controller' => 'ProductBundle\\Controller\\ProductController::adminManagerAction',  '_route' => 'show_productadmin',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/product/showdetailedproduct')) {
                        // show_detailedproduct
                        if (preg_match('#^/product/showdetailedproduct/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'show_detailedproduct']), array (  '_controller' => 'ProductBundle\\Controller\\ProductController::showdetailedProductAction',));
                        }

                        // show_detailedproductadmin
                        if (0 === strpos($pathinfo, '/product/showdetailedproductadmin') && preg_match('#^/product/showdetailedproductadmin/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'show_detailedproductadmin']), array (  '_controller' => 'ProductBundle\\Controller\\ProductController::showdetailedProductadminAction',));
                        }

                        // show_detailedproductpdf
                        if (0 === strpos($pathinfo, '/product/showdetailedproductpdf') && preg_match('#^/product/showdetailedproductpdf/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'show_detailedproductpdf']), array (  '_controller' => 'ProductBundle\\Controller\\ProductController::showdetailedProductpdfAction',));
                        }

                    }

                    // show_category
                    if ('/product/showcategory' === $pathinfo) {
                        return array (  '_controller' => 'ProductBundle\\Controller\\ProductcategoryController::showCategoryAction',  '_route' => 'show_category',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/product/new')) {
                    // new
                    if ('/product/new' === $pathinfo) {
                        return array (  '_controller' => 'ProductBundle\\Controller\\ProductController::newAction',  '_route' => 'new',);
                    }

                    // new_category
                    if ('/product/newcategory' === $pathinfo) {
                        return array (  '_controller' => 'ProductBundle\\Controller\\ProductcategoryController::newAction',  '_route' => 'new_category',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/product/update')) {
                    // update_product
                    if (preg_match('#^/product/update/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_product']), array (  '_controller' => 'ProductBundle\\Controller\\ProductController::updateAction',));
                    }

                    // update_category
                    if (0 === strpos($pathinfo, '/product/updatecategory') && preg_match('#^/product/updatecategory/(?P<productcatid>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_category']), array (  '_controller' => 'ProductBundle\\Controller\\ProductcategoryController::updatecategoryAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/product/delete')) {
                    // delete_product
                    if (preg_match('#^/product/delete/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_product']), array (  '_controller' => 'ProductBundle\\Controller\\ProductController::deleteAction',));
                    }

                    // delete_category
                    if (0 === strpos($pathinfo, '/product/deletecategory') && preg_match('#^/product/deletecategory/(?P<productcatid>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_category']), array (  '_controller' => 'ProductBundle\\Controller\\ProductcategoryController::deleteAction',));
                    }

                    // delete_productadmin
                    if (0 === strpos($pathinfo, '/product/deleteadmin') && preg_match('#^/product/deleteadmin/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_productadmin']), array (  '_controller' => 'ProductBundle\\Controller\\ProductController::deleteAdminAction',));
                    }

                }

                // deal_pdf
                if (0 === strpos($pathinfo, '/product/dealpdf') && preg_match('#^/product/dealpdf/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deal_pdf']), array (  '_controller' => 'ProductBundle\\Controller\\PdfController::newPdfAction',));
                }

                if (0 === strpos($pathinfo, '/product/mobile')) {
                    // mobile_product_add
                    if ('/product/mobileproduct/add' === $pathinfo) {
                        return array (  '_controller' => 'ProductBundle\\Controller\\ProductController::mobileProductAddAction',  '_route' => 'mobile_product_add',);
                    }

                    // mobile_product_delete
                    if (0 === strpos($pathinfo, '/product/mobiledeleteproduct') && preg_match('#^/product/mobiledeleteproduct/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_product_delete']), array (  '_controller' => 'ProductBundle\\Controller\\ProductController::mobileProductDeleteAction',));
                    }

                    // mobile_allproduct
                    if ('/product/mobileshowProduct' === $pathinfo) {
                        return array (  '_controller' => 'ProductBundle\\Controller\\ProductController::mobilegetAllProductAction',  '_route' => 'mobile_allproduct',);
                    }

                    // mobile_allproduct2
                    if (0 === strpos($pathinfo, '/product/mobileProductsbyuser') && preg_match('#^/product/mobileProductsbyuser/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_allproduct2']), array (  '_controller' => 'ProductBundle\\Controller\\ProductController::mobilegetProductByUserAction',));
                    }

                }

                // mobile_allproduct1
                if (0 === strpos($pathinfo, '/product/mobonepro') && preg_match('#^/product/mobonepro/(?P<productid>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_allproduct1']), array (  '_controller' => 'ProductBundle\\Controller\\ProductController::mobilegetOneProductAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

        }

        elseif (0 === strpos($pathinfo, '/ticket')) {
            if (0 === strpos($pathinfo, '/ticket/ticket')) {
                // ticket_index
                if ('/ticket/ticket' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'TicketBundle\\Controller\\TicketController::indexAction',  '_route' => 'ticket_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_ticket_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ticket_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_ticket_index;
                    }

                    return $ret;
                }
                not_ticket_index:

                // ticket_show
                if (preg_match('#^/ticket/ticket/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ticket_show']), array (  '_controller' => 'TicketBundle\\Controller\\TicketController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_ticket_show;
                    }

                    return $ret;
                }
                not_ticket_show:

                // ticket_new
                if ('/ticket/ticket/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'TicketBundle\\Controller\\TicketController::newAction',  '_route' => 'ticket_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_ticket_new;
                    }

                    return $ret;
                }
                not_ticket_new:

                // ticket_edit
                if (preg_match('#^/ticket/ticket/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ticket_edit']), array (  '_controller' => 'TicketBundle\\Controller\\TicketController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_ticket_edit;
                    }

                    return $ret;
                }
                not_ticket_edit:

                // ticket_delete
                if (preg_match('#^/ticket/ticket/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ticket_delete']), array (  '_controller' => 'TicketBundle\\Controller\\TicketController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_ticket_delete;
                    }

                    return $ret;
                }
                not_ticket_delete:

            }

            elseif (0 === strpos($pathinfo, '/ticket/showTicket')) {
                // show_ticket
                if ('/ticket/showTicket' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\TicketController::showTicketAction',  '_route' => 'show_ticket',);
                }

                // showA_ticket
                if ('/ticket/showTicketAdmin' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\TicketController::showTicketAdminAction',  '_route' => 'showA_ticket',);
                }

            }

            // show_reportissue
            if ('/ticket/showReportIssue' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\ReportIssueController::showReportIssueAction',  '_route' => 'show_reportissue',);
            }

            if (0 === strpos($pathinfo, '/ticket/delete')) {
                // delete_ticket
                if (preg_match('#^/ticket/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_ticket']), array (  '_controller' => 'TicketBundle\\Controller\\TicketController::deleteAction',));
                }

                // delete_reportissue
                if (0 === strpos($pathinfo, '/ticket/deleteC') && preg_match('#^/ticket/deleteC/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_reportissue']), array (  '_controller' => 'TicketBundle\\Controller\\ReportIssueController::deleteCAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/ticket/update')) {
                // update_ticket
                if (preg_match('#^/ticket/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_ticket']), array (  '_controller' => 'TicketBundle\\Controller\\TicketController::updateAction',));
                }

                // update_reportissue
                if (0 === strpos($pathinfo, '/ticket/updateC') && preg_match('#^/ticket/updateC/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_reportissue']), array (  '_controller' => 'TicketBundle\\Controller\\ReportIssueController::updateCAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/ticket/create')) {
                // create_ticket
                if ('/ticket/create' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\TicketController::createAction',  '_route' => 'create_ticket',);
                }

                // createImage_ticket
                if ('/ticket/createImage' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\TicketController::addTicketDBAction',  '_route' => 'createImage_ticket',);
                }

                // create_reportissue
                if ('/ticket/createC' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\ReportIssueController::createCAction',  '_route' => 'create_reportissue',);
                }

            }

            elseif (0 === strpos($pathinfo, '/ticket/findT')) {
                // findT_ticket
                if (preg_match('#^/ticket/findT/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'findT_ticket']), array (  '_controller' => 'TicketBundle\\Controller\\MobileController::findAction',));
                }

                // findTAll_ticket
                if ('/ticket/findTAll' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\MobileController::findAllAction',  '_route' => 'findTAll_ticket',);
                }

            }

            // reactadmin_index
            if ('/ticket/A' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\ReactAdminController::indexAction',  '_route' => 'reactadmin_index',);
            }

            // reactadmin_show
            if (preg_match('#^/ticket/(?P<id>[^/]++)/showA$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'reactadmin_show']), array (  '_controller' => 'TicketBundle\\Controller\\ReactAdminController::showAction',));
            }

            // reactadmin_new
            if ('/ticket/newA' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\ReactAdminController::newAction',  '_route' => 'reactadmin_new',);
            }

            // reactadmin_edit
            if (preg_match('#^/ticket/(?P<id>[^/]++)/editA$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'reactadmin_edit']), array (  '_controller' => 'TicketBundle\\Controller\\ReactAdminController::editAction',));
            }

            // reactadmin_delete
            if (preg_match('#^/ticket/(?P<id>[^/]++)/deleteA$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'reactadmin_delete']), array (  '_controller' => 'TicketBundle\\Controller\\ReactAdminController::deleteAction',));
            }

            // SendMail
            if ('/ticket/mail' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\DefaultController::SendMailAction',  '_route' => 'SendMail',);
            }

            // showA_reportissue
            if ('/ticket/showReportIssueAdmin' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\ReportIssueController::showReportIssueAdminAction',  '_route' => 'showA_reportissue',);
            }

            if (0 === strpos($pathinfo, '/ticket/delete')) {
                // deleteA_ticket
                if (0 === strpos($pathinfo, '/ticket/deleteA') && preg_match('#^/ticket/deleteA/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteA_ticket']), array (  '_controller' => 'TicketBundle\\Controller\\TicketController::deleteAdminAction',));
                }

                // deleteA_reportissue
                if (0 === strpos($pathinfo, '/ticket/deleteCA') && preg_match('#^/ticket/deleteCA/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteA_reportissue']), array (  '_controller' => 'TicketBundle\\Controller\\ReportIssueController::deleteCAdminAction',));
                }

                // deleteMobile
                if (0 === strpos($pathinfo, '/ticket/deleteMobile') && preg_match('#^/ticket/deleteMobile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteMobile']), array (  '_controller' => 'TicketBundle\\Controller\\MobileController::deleteMobileAction',));
                }

            }

            // updateA_reportissue
            if (0 === strpos($pathinfo, '/ticket/updateCA') && preg_match('#^/ticket/updateCA/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateA_reportissue']), array (  '_controller' => 'TicketBundle\\Controller\\ReportIssueController::updateCAdminAction',));
            }

            // updateMobile
            if (0 === strpos($pathinfo, '/ticket/updateMobile') && preg_match('#^/ticket/updateMobile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateMobile']), array (  '_controller' => 'TicketBundle\\Controller\\MobileController::updateMobileAction',));
            }

            // createA_reportissue
            if ('/ticket/createCA' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\ReportIssueController::createCAdminAction',  '_route' => 'createA_reportissue',);
            }

            // allMobi
            if ('/ticket/allMobi' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\MobileController::allMobileAction',  '_route' => 'allMobi',);
            }

            // newMobile
            if ('/ticket/newMobile' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\MobileController::newMobileAction',  '_route' => 'newMobile',);
            }

        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
            }

            return $ret;
        }
        not_user_homepage:

        if (0 === strpos($pathinfo, '/event')) {
            // event_homepage
            if ('/event' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\DefaultController::indexAction',  '_route' => 'event_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_event_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'event_homepage'));
                }

                return $ret;
            }
            not_event_homepage:

            // home_event
            if ('/event/homeEvent' === $pathinfo) {
                return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::homeEventAction',  '_route' => 'home_event',);
            }

            if (0 === strpos($pathinfo, '/event/showEvent')) {
                // show_event
                if ('/event/showEvent' === $pathinfo) {
                    return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::showEventAction',  '_route' => 'show_event',);
                }

                // event_detail
                if (0 === strpos($pathinfo, '/event/showEventDetail') && preg_match('#^/event/showEventDetail/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'event_detail']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::showEventDetailAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/event/searchre')) {
                // search_event
                if ('/event/searchres' === $pathinfo) {
                    return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::searchEventAction',  '_route' => 'search_event',);
                }

                // ajax_search
                if ('/event/searchreAjax' === $pathinfo) {
                    return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::searchDBAction',  '_route' => 'ajax_search',);
                }

                // mobile_search
                if ('/event/searchreMobile' === $pathinfo) {
                    return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::searchMobileAction',  '_route' => 'mobile_search',);
                }

            }

            elseif (0 === strpos($pathinfo, '/event/mo')) {
                if (0 === strpos($pathinfo, '/event/modifyevent')) {
                    // modify_event
                    if (preg_match('#^/event/modifyevent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'modify_event']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::updateEventAction',));
                    }

                    // modify_eventDB
                    if (preg_match('#^/event/modifyevent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'modify_eventDB']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::updateEventDBAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/event/mobile')) {
                    if (0 === strpos($pathinfo, '/event/mobileevent')) {
                        if (0 === strpos($pathinfo, '/event/mobileevent/add')) {
                            // mobile_event_add
                            if ('/event/mobileevent/add' === $pathinfo) {
                                return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::mobileEventAddAction',  '_route' => 'mobile_event_add',);
                            }

                            // mobile_locationevnt
                            if ('/event/mobileevent/addLocation' === $pathinfo) {
                                return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::addEventLocationMobileAction',  '_route' => 'mobile_locationevnt',);
                            }

                        }

                        // mobile_event_modify
                        if ('/event/mobileeventmodify' === $pathinfo) {
                            return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::mobileEventModifyAction',  '_route' => 'mobile_event_modify',);
                        }

                        // mobile_eventmastadded
                        if ('/event/mobileeventlastadded' === $pathinfo) {
                            return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::mobileEventlastAddedAction',  '_route' => 'mobile_eventmastadded',);
                        }

                        // mobile_getlocationevnt
                        if ('/event/mobileeventgetLocation' === $pathinfo) {
                            return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::getEventLocationMobileAction',  '_route' => 'mobile_getlocationevnt',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/event/mobileshowEvents')) {
                        // mobile_allevent
                        if ('/event/mobileshowEvents' === $pathinfo) {
                            return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::mobilegetAllEventAction',  '_route' => 'mobile_allevent',);
                        }

                        // mobile_allevent1
                        if (preg_match('#^/event/mobileshowEvents/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_allevent1']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::mobilegetOneEventAction',));
                        }

                    }

                    // mobile_statevent
                    if (0 === strpos($pathinfo, '/event/mobilestatEvents') && preg_match('#^/event/mobilestatEvents/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_statevent']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::mobilegetStatEventAction',));
                    }

                    // mobile_allevent2
                    if (0 === strpos($pathinfo, '/event/mobileEventsbyuser') && preg_match('#^/event/mobileEventsbyuser/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_allevent2']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::mobilegetEventByUserAction',));
                    }

                    if (0 === strpos($pathinfo, '/event/mobiledelet')) {
                        // mobile_event_delete
                        if (0 === strpos($pathinfo, '/event/mobiledeleteevent') && preg_match('#^/event/mobiledeleteevent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_event_delete']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::mobileEventDeleteAction',));
                        }

                        // mobile_deletereservation
                        if (0 === strpos($pathinfo, '/event/mobiledeletereservation') && preg_match('#^/event/mobiledeletereservation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_deletereservation']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::deleteReservationMobileAction',));
                        }

                        // mobile_deletlocation
                        if (0 === strpos($pathinfo, '/event/mobiledeletlocation') && preg_match('#^/event/mobiledeletlocation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_deletlocation']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::deleteEventLocationMobileAction',));
                        }

                    }

                    // mobile_modiflocation
                    if ('/event/mobilemodiflocation' === $pathinfo) {
                        return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::modifieEventLocationMobileAction',  '_route' => 'mobile_modiflocation',);
                    }

                    if (0 === strpos($pathinfo, '/event/mobilereservation')) {
                        // mobile_reservation
                        if ('/event/mobilereservation' === $pathinfo) {
                            return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::showReservationMobileAction',  '_route' => 'mobile_reservation',);
                        }

                        // mobile_reservationbyuser
                        if (0 === strpos($pathinfo, '/event/mobilereservationbyuser') && preg_match('#^/event/mobilereservationbyuser/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile_reservationbyuser']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::reservationByUserMobileAction',));
                        }

                    }

                    // mobile_addreservation
                    if ('/event/mobileaddreservation' === $pathinfo) {
                        return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::addReservationMobileAction',  '_route' => 'mobile_addreservation',);
                    }

                }

                // mobile_login
                if ('/event/mobillogin' === $pathinfo) {
                    return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::loginMobileAction',  '_route' => 'mobile_login',);
                }

            }

            // event_owner
            if ('/event/mylistevent' === $pathinfo) {
                return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::eventByOwnerAction',  '_route' => 'event_owner',);
            }

            if (0 === strpos($pathinfo, '/event/ad')) {
                if (0 === strpos($pathinfo, '/event/addEvent')) {
                    // add_event
                    if ('/event/addEvent' === $pathinfo) {
                        return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::addEventAction',  '_route' => 'add_event',);
                    }

                    // add_eventDB
                    if ('/event/addEventDB' === $pathinfo) {
                        return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::addEventDBAction',  '_route' => 'add_eventDB',);
                    }

                    if (0 === strpos($pathinfo, '/event/addEventlocation')) {
                        // add_event_location
                        if (preg_match('#^/event/addEventlocation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'add_event_location']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::addEventLocationAction',));
                        }

                        // add_event_locationdb
                        if (0 === strpos($pathinfo, '/event/addEventlocationdb') && preg_match('#^/event/addEventlocationdb/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'add_event_locationdb']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::addEventLocationDBAction',));
                        }

                    }

                }

                // admin_space
                if ('/event/adminevent' === $pathinfo) {
                    return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::adminManagerAction',  '_route' => 'admin_space',);
                }

                // admin_admin
                if ('/event/adminadminevent' === $pathinfo) {
                    return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::adminadminManagerAction',  '_route' => 'admin_admin',);
                }

            }

            // my_event
            if ('/event/userevent' === $pathinfo) {
                return array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::myEventAction',  '_route' => 'my_event',);
            }

            // delete_event
            if (0 === strpos($pathinfo, '/event/deleteevent') && preg_match('#^/event/deleteevent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_event']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::deleteEventAction',));
            }

            // delete_reservation
            if (0 === strpos($pathinfo, '/event/deletereservation') && preg_match('#^/event/deletereservation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_reservation']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::deletereservationAction',));
            }

            if (0 === strpos($pathinfo, '/event/reservation')) {
                // reserve_event
                if (preg_match('#^/event/reservation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reserve_event']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::reserveEventAction',));
                }

                // reservation_card
                if (0 === strpos($pathinfo, '/event/reservationCard') && preg_match('#^/event/reservationCard/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_card']), array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::reservationCardAction',));
                }

                // mymy_reservation
                if ('/event/reservationreservation' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Mahmoud\\EventBundle\\Controller\\HomeEventController::reservationByEventUserAction',  '_route' => 'mymy_reservation',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_mymy_reservation;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'mymy_reservation'));
                    }

                    return $ret;
                }
                not_mymy_reservation:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/notifications')) {
            // notification_list
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_list']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
            }

            // notification_mark_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_seen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',));
            }

            // notification_mark_as_unseen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_unseen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_unseen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',));
            }

            // notification_mark_all_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/markAllAsSeen$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_all_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
