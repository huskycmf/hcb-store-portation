<?php
namespace HcbStorePortation\Data;

use HcCore\Data\DataMessagesInterface;
use Zend\Di\Di;
use Zend\Http\PhpEnvironment\Request;
use HcCore\InputFilter\InputFilter;
use EasyCSV\Reader as CsvReader;;

class Import extends InputFilter implements ImportInterface, DataMessagesInterface
{
    protected $csvReader = null;

    /**
     * @param Request $request
     * @param Di $di
     */
    public function __construct(Request $request,
                                Di $di)
    {
        \Zf2Libs\Debug\Utility::dump("FILE HERE");

        /* @var $input \Zend\InputFilter\Input */
        $input = $di->get('Zend\InputFilter\Input', array('name'=>'file'))
                    ->setRequired(false)
                    ->setAllowEmpty(true);

        $csvReader = &$this->csvReader;
        $input->getValidatorChain()
              ->attach($di->newInstance('Zend\Validator\Callback',
                array('options'=>
                    array('callback' => function ($filePath) use ($di, &$csvReader) {
                            $csvReader = $di->get('EasyCSV\Reader', array('path'=>$filePath));
                            return true;
                        })), false));

        $this->add($input);
        $this->setData($request->getPost()->toArray());
    }

    /**
     * @return CsvReader
     */
    public function getCsv()
    {
        return $this->csvReader;
    }
}
