[{if $oViewConf->isAmazonActive() && $oViewConf->isAmazonSessionActive() && !$oViewConf->isAmazonExclude()}]
    [{if $oViewConf->isFlowCompatibleTheme()}]
        [{include file="amazonpay/checkout_order_address_flow.tpl"}]
    [{else}]
        [{include file="amazonpay/checkout_order_address_wave.tpl"}]
    [{else}]
[{else}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]