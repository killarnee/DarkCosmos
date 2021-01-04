<?php
/**
 * SkinTemplate class for the DarkCosmos skin
 *
 * @ingroup Skins
 */
class SkinDarkCosmos extends SkinTemplate {
    /** @var string */
    public $skinname = 'darkcosmos';

    /** @var string */
    public $stylename = 'DarkCosmos';

    /** @var string */
    public $template = 'DarkCosmosTemplate';

    /**
     * @param OutputPage $out
     */
    public function initPage( OutputPage $out ) {
        parent::initPage( $out );

        $out->addMeta( 'viewport',
            'width=device-width, initial-scale=1.0, ' .
            'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
        );

        $out->addModuleStyles( [
            'mediawiki.skinning.content.externallinks',
            'skins.darkcosmos',
        ] );
        $out->addModules( [
            'skins.darkcosmos.js',
            'skins.darkcosmos.mobile'
        ] );

        // Basic IE support without flexbox
        //$out->addStyle( $this->stylename . '/resources/IE9fixes.css', 'screen', 'IE' );
    }
}
