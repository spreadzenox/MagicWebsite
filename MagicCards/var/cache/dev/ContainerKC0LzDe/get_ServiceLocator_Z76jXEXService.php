<?php

namespace ContainerKC0LzDe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z76jXEXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z76jXEX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z76jXEX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Admin\\CarteCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\CarteCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\CarteCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\CarteCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\CarteCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\CarteCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\CarteCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\CarteCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\CarteCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\CarteCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\CarteCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\CarteCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\CarteCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\CarteCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\PaquetCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\PaquetCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\PaquetCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\PaquetCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\PaquetCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\PaquetCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\PaquetCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PaquetCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PaquetCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\PaquetCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PaquetCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PaquetCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PaquetCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PaquetCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CarteController::delete' => ['privates', '.service_locator.75.FvYQ', 'get_ServiceLocator_75_FvYQService', true],
            'App\\Controller\\CarteController::edit' => ['privates', '.service_locator.75.FvYQ', 'get_ServiceLocator_75_FvYQService', true],
            'App\\Controller\\CarteController::index' => ['privates', '.service_locator.YAB3ekr', 'get_ServiceLocator_YAB3ekrService', true],
            'App\\Controller\\CarteController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CarteController::show' => ['privates', '.service_locator.KQpIb2I', 'get_ServiceLocator_KQpIb2IService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\MyAccountController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PaquetController::delete' => ['privates', '.service_locator.39zdEO3', 'get_ServiceLocator_39zdEO3Service', true],
            'App\\Controller\\PaquetController::edit' => ['privates', '.service_locator.39zdEO3', 'get_ServiceLocator_39zdEO3Service', true],
            'App\\Controller\\PaquetController::index' => ['privates', '.service_locator.dPnUVoE', 'get_ServiceLocator_DPnUVoEService', true],
            'App\\Controller\\PaquetController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PaquetController::show' => ['privates', '.service_locator.7ldIKVQ', 'get_ServiceLocator_7ldIKVQService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\CarteCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\CarteCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\CarteCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\CarteCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\CarteCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\CarteCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\CarteCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\CarteCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\CarteCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\CarteCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\CarteCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\CarteCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\CarteCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\CarteCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\CarteCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\PaquetCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\PaquetCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\PaquetCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\PaquetCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\PaquetCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\PaquetCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\PaquetCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PaquetCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PaquetCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\PaquetCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PaquetCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PaquetCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PaquetCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PaquetCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PaquetCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CarteController:delete' => ['privates', '.service_locator.75.FvYQ', 'get_ServiceLocator_75_FvYQService', true],
            'App\\Controller\\CarteController:edit' => ['privates', '.service_locator.75.FvYQ', 'get_ServiceLocator_75_FvYQService', true],
            'App\\Controller\\CarteController:index' => ['privates', '.service_locator.YAB3ekr', 'get_ServiceLocator_YAB3ekrService', true],
            'App\\Controller\\CarteController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CarteController:show' => ['privates', '.service_locator.KQpIb2I', 'get_ServiceLocator_KQpIb2IService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\MyAccountController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PaquetController:delete' => ['privates', '.service_locator.39zdEO3', 'get_ServiceLocator_39zdEO3Service', true],
            'App\\Controller\\PaquetController:edit' => ['privates', '.service_locator.39zdEO3', 'get_ServiceLocator_39zdEO3Service', true],
            'App\\Controller\\PaquetController:index' => ['privates', '.service_locator.dPnUVoE', 'get_ServiceLocator_DPnUVoEService', true],
            'App\\Controller\\PaquetController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PaquetController:show' => ['privates', '.service_locator.7ldIKVQ', 'get_ServiceLocator_7ldIKVQService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\CarteCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CarteCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\CarteCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CarteCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CarteCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CarteCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CarteCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CarteCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CarteCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CarteCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CarteCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CarteCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CarteCrudController::delete' => '?',
            'App\\Controller\\Admin\\CarteCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CarteCrudController::detail' => '?',
            'App\\Controller\\Admin\\CarteCrudController::edit' => '?',
            'App\\Controller\\Admin\\CarteCrudController::index' => '?',
            'App\\Controller\\Admin\\CarteCrudController::new' => '?',
            'App\\Controller\\Admin\\CarteCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CarteCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CarteCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::delete' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::detail' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::edit' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::index' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::new' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\PaquetCrudController::updateEntity' => '?',
            'App\\Controller\\CarteController::delete' => '?',
            'App\\Controller\\CarteController::edit' => '?',
            'App\\Controller\\CarteController::index' => '?',
            'App\\Controller\\CarteController::new' => '?',
            'App\\Controller\\CarteController::show' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\MyAccountController::index' => '?',
            'App\\Controller\\PaquetController::delete' => '?',
            'App\\Controller\\PaquetController::edit' => '?',
            'App\\Controller\\PaquetController::index' => '?',
            'App\\Controller\\PaquetController::new' => '?',
            'App\\Controller\\PaquetController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\CarteCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CarteCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\CarteCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CarteCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CarteCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CarteCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CarteCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CarteCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CarteCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CarteCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CarteCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CarteCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CarteCrudController:delete' => '?',
            'App\\Controller\\Admin\\CarteCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CarteCrudController:detail' => '?',
            'App\\Controller\\Admin\\CarteCrudController:edit' => '?',
            'App\\Controller\\Admin\\CarteCrudController:index' => '?',
            'App\\Controller\\Admin\\CarteCrudController:new' => '?',
            'App\\Controller\\Admin\\CarteCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CarteCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CarteCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:delete' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:detail' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:edit' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:index' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:new' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\PaquetCrudController:updateEntity' => '?',
            'App\\Controller\\CarteController:delete' => '?',
            'App\\Controller\\CarteController:edit' => '?',
            'App\\Controller\\CarteController:index' => '?',
            'App\\Controller\\CarteController:new' => '?',
            'App\\Controller\\CarteController:show' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\MyAccountController:index' => '?',
            'App\\Controller\\PaquetController:delete' => '?',
            'App\\Controller\\PaquetController:edit' => '?',
            'App\\Controller\\PaquetController:index' => '?',
            'App\\Controller\\PaquetController:new' => '?',
            'App\\Controller\\PaquetController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
