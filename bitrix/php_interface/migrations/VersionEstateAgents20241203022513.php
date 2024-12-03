<?php

namespace Sprint\Migration;


class VersionEstateAgents20241203022513 extends Version
{
    protected $author = "admin";

    protected $description = "Миграция для \"Агентов по недвижимости\"";

    protected $moduleVersion = "4.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up(){
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock(array (
          'NAME' => 'RealEstateAgents',
          'TABLE_NAME' => 'b_hlsys_real_estate_agents',
          'LANG' => 
          array (
            'ru' => 
            array (
              'NAME' => 'Список агентов по недвижимости',
            ),
            'en' => 
            array (
              'NAME' => 'List of real estate agents',
            ),
          ),
       ));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_NAME',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'NAME',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'S',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'Y',
  'SETTINGS' => 
  array (
    'SIZE' => 100,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 10,
    'MAX_LENGTH' => 255,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'FULLNAME',
    'ru' => 'ФИО',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'FULLNAME',
    'ru' => 'ФИО',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'FULLNAME',
    'ru' => 'ФИО',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_ACTIVE',
  'USER_TYPE_ID' => 'boolean',
  'XML_ID' => 'ACTIVE',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DEFAULT_VALUE' => 0,
    'DISPLAY' => 'CHECKBOX',
    'LABEL' => 
    array (
      0 => '',
      1 => '',
    ),
    'LABEL_CHECKBOX' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'ACTIVE',
    'ru' => 'Активность',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'ACTIVE',
    'ru' => 'Активность',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'ACTIVE',
    'ru' => 'Активность',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_EMAIL',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'EMAIL',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'S',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'Y',
  'SETTINGS' => 
  array (
    'SIZE' => 100,
    'ROWS' => 1,
    'REGEXP' => '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/',
    'MIN_LENGTH' => 1,
    'MAX_LENGTH' => 255,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'AGENT_EMAIL',
    'ru' => 'Почта',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'AGENT_EMAIL',
    'ru' => 'Почта',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'AGENT_EMAIL',
    'ru' => 'Почта',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_PHONE',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'PHONE',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'S',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'Y',
  'SETTINGS' => 
  array (
    'SIZE' => 10,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 9,
    'MAX_LENGTH' => 12,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'NUMBERPHONE',
    'ru' => 'Номер телефона',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'NUMBERPHONE',
    'ru' => 'Номер телефона',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'NUMBERPHONE',
    'ru' => 'Номер телефона',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_TYPE_ACTIVITY',
  'USER_TYPE_ID' => 'enumeration',
  'XML_ID' => 'TYPE_ACTIVITY',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'S',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'LIST',
    'LIST_HEIGHT' => 3,
    'CAPTION_NO_VALUE' => '',
    'SHOW_NO_VALUE' => 'N',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'TYPE_ACTIVITY',
    'ru' => 'Вид деятельности',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'TYPE_ACTIVITY',
    'ru' => 'Вид деятельности',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'TYPE_ACTIVITY',
    'ru' => 'Вид деятельности',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'ENUM_VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Брокер',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'BROKER',
    ),
    1 => 
    array (
      'VALUE' => 'Агент по продаже',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SALESAGENT',
    ),
    2 => 
    array (
      'VALUE' => 'Агент по покупке',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'BUYINGAGENT',
    ),
    3 => 
    array (
      'VALUE' => 'Риэлтор',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'REALTOR',
    ),
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_AVA',
  'USER_TYPE_ID' => 'file',
  'XML_ID' => 'AVA',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'LIST_WIDTH' => 300,
    'LIST_HEIGHT' => 300,
    'MAX_SHOW_SIZE' => 0,
    'MAX_ALLOWED_SIZE' => 0,
    'EXTENSIONS' => 
    array (
      'jpg' => true,
      'jpeg' => true,
      'png' => true,
    ),
    'TARGET_BLANK' => 'N',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'PHOTO',
    'ru' => 'Фото',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'PHOTO',
    'ru' => 'Фото',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'PHOTO',
    'ru' => 'Фото',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
        }

   public function down(){
    $helper = $this->getHelperManager();
    $hlblockId = $helper->Hlblock()->getHlblockIdIfExists('RealEstateAgents');
    
    if ($hlblockId) {
        $helper->UserTypeEntity()->deleteUserTypeEntitiesIfExists(
            'HLBLOCK_' . $hlblockId,
            [
                'UF_NAME',
                'UF_ACTIVE',
                'UF_EMAIL',
                'UF_PHONE',
                'UF_TYPE_ACTIVITY',
                'UF_AVA',
            ]
        );
        $helper->Hlblock()->deleteHlblock($hlblockId);
    }
}

}
