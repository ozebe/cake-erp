<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Model\Entity\GaNivelUsuario;
use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public $nivelUsuario;
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Authentication.Authentication');

        //$this->loadComponent('Authorization.Authorization');


        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        //carrega o modelo GaUsuario para acessarmos os dados de qualquer local
        //$this->loadModel("GaUsuario");
        $this->loadModel('GaNivelUsuario');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');

    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login']);

        //se um usuário estiver logado
        if($this->Authentication->getResult()->getStatus() == 'SUCCESS'){
            $GaUsuarioLogado = $this->Authentication->getResult()->getData();
            $this->set(compact('GaUsuarioLogado'));

            $logado = true;
            $this->set(compact('logado'));

            //deve ser acessado como $this->nivelUsuario para acessar nos controllers
            $this->nivelUsuario = $this->GaNivelUsuario->find('all',[
                'conditions' => ['GaNivelUsuario.id_usuario' => $GaUsuarioLogado->id] ,
            ])->contain('GaNivelAcesso')->select(['GaNivelAcesso.sigla','GaNivelAcesso.descricao']);

            //carrega os valores da variavel publica para poder ser utilizada nos templates
            $nivelUsuarioLogado = $this->nivelUsuario;
            $this->set(compact('nivelUsuarioLogado'));
        } else{
            $logado = false;
            $this->set(compact('logado'));
        }

    }
}
