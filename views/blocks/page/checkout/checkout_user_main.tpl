[{if !$oxcmp_user && !$oView->getLoginOption() && $oViewConf->isAmazonActive() && !$oViewConf->isAmazonExclude() && !$oViewConf->isAmazonSessionActive()}]
    [{if $oViewConf->isFlowCompatibleTheme()}]
        [{include file="amazonpay/checkout_user_main_flow.tpl"}]
    [{else}]
        [{include file="amazonpay/checkout_user_main_wave.tpl"}]
    [{/if}]
[{/if}]
[{$smarty.block.parent}]