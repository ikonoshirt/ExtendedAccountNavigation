<?php
class Ikonoshirt_ExtendedAccountNavigation_Block_Account_Navigation
    extends Mage_Customer_Block_Account_Navigation
{
    /**
     * Removes link by name
     *
     * @param string $name
     *
     * @return Mage_Page_Block_Template_Links
     */
    public function removeLinkByName($name)
    {
        foreach ($this->_links as $k => $v) {
            if ($v->getName() == $name) {
                unset($this->_links[$k]);
            }
        }

        return $this;
    }
}