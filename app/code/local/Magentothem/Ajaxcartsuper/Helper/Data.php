<?php

class Magentothem_Ajaxcartsuper_Helper_Data extends Mage_Core_Helper_Abstract
{
    //check if is ajax request
    public function isAjax() {
        return (boolean) ((isset($_SERVER['HTTP_X_REQUESTED_WITH'])) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'));
    }
    
    public function getEmptyCartHtml() {
                $html = '<div class="col-main">
                            <div class="page-title">
                                <h1>'.$this->__("Carrinho Vazio").'</h1>
                            </div>
                            <div class="cart-empty">
                                        <p>'.$this->__("Não há produtos no seu carrinho").'.</p>
                                <p>'.$this->__("Clique").'<a href="'.Mage::getBaseUrl().'">'.$this->__("aqui").'</a>'.$this->__("e continue").'.</p>
                            </div>
                         </div>';
                return $html;
    }

    public function getContinueShoppingUrl()
    {
        $url = $this->getData('continue_shopping_url');
        if (is_null($url)) {
            $url = Mage::getSingleton('checkout/session')->getContinueShoppingUrl(true);
            if (!$url) {
                $url = Mage::getUrl();
            }
            $this->setData('continue_shopping_url', $url);
        }
        return $url;
    }
    
    public function productHtml($pname = NULL, $plink = NULL, $pimage = NULL) {
        $html = ""; 
        $html .="<div class ='p_image' style='float:left; '><img src ='".$pimage."' /></div>";
        $html .= "<div class ='p_name' style='float:left; width:200px; height:80px;'><a href ='".$plink."'>".$pname."</a></div>";
        return $html;
    }
}