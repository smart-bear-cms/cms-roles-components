<?php

namespace nguyenanhung\Platforms\WebBuilderSDK\RolesAndPermission\Components\Database;

use nguyenanhung\Platforms\WebBuilderSDK\Initialize\BaseComponents\Database\Database as InitializeComponentsDatabase;

/**
 * Class Database
 *
 * @package   nguyenanhung\Platforms\WebBuilderSDK\RolesAndPermission\Components\Database
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Database extends InitializeComponentsDatabase
{
    const TABLE_AUTHENTICATION = 'authentication';
    const TABLE_AUTHENTICATION_META_BY_GROUP = 'authentication_meta';
    const TABLE_AUTHENTICATION_META_BY_USER = 'authentication_meta_by_user';

    const TABLE_AUTHENTICATION_SERVICES = 'authentication_services';
    const TABLE_AUTHENTICATION_SERVICES_META_BY_GROUP = 'authentication_services_by_user_group';
    const TABLE_AUTHENTICATION_SERVICES_META_BY_USER = 'authentication_services_by_user_id';

    const TABLE_AUTHENTICATION_SIDEBAR = 'authentication_sidebar';
    const TABLE_AUTHENTICATION_SIDEBAR_META_BY_GROUP = 'authentication_sidebar_by_user_group';
    const TABLE_AUTHENTICATION_SIDEBAR_META_BY_USER = 'authentication_sidebar_by_user_id';

    use AuthenticationTable;

    /**
     * Database constructor.
     *
     * @param array $options
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->logger->setLoggerSubPath(__CLASS__);
    }
}
