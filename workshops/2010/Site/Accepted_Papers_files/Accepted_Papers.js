// Created by iWeb 3.0.1 local-build-20100501

setTransparentGifURL('Media/transparent.gif');function hostedOnDM()
{return false;}
function onPageLoad()
{loadMozillaCSS('Accepted_Papers_files/Accepted_PapersMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');adjustLineHeightIfTooBig('id2');adjustFontSizeIfTooBig('id2');detectBrowser();fixAllIEPNGs('Media/transparent.gif');Widget.onload();fixupAllIEPNGBGs();performPostEffectsFixups()}
function onPageUnload()
{Widget.onunload();}
