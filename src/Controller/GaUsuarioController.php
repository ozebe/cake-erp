<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\GaNivelUsuario;
use Cake\Http\Exception\ForbiddenException;
/**
 * GaUsuario Controller
 *
 * @property \App\Model\Table\GaUsuarioTable $GaUsuario
 *
 * @method \App\Model\Entity\GaUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GaUsuarioController extends AppController
{

    public function autorizado(){
        foreach($this->nivelUsuario as $nivel){
            if(($nivel->ga_nivel_acesso->sigla == "ADM") OR ($nivel->ga_nivel_acesso->sigla == "GA")){
                return true;
                break;
            } else {
                return false;
                break;
            }
        }
    }


    public function login()
    {        //não precisa de autorização para logar
       //$this->Authorization->skipAuthorization();
        $result = $this->Authentication->getResult();
        // If the user is logged in send them away.
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/';
            return $this->redirect($target);
        }
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error('Usuário ou senha incorreta');
        }
    }

    public function logout()
    {
        //não precisa de autorização para deslogar
        //$this->Authorization->skipAuthorization();
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'GaUsuario', 'action' => 'login']);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if($this->autorizado()){
            $gaUsuario = $this->paginate($this->GaUsuario);
            $this->set(compact('gaUsuario'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Ga Usuario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->autorizado()){
            $gaUsuario = $this->GaUsuario->get($id, [
                'contain' => [],
            ]);

            $this->set('gaUsuario', $gaUsuario);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if($this->autorizado()){
            $gaUsuario = $this->GaUsuario->newEmptyEntity();
            if ($this->request->is('post')) {
                $gaUsuario = $this->GaUsuario->patchEntity($gaUsuario, $this->request->getData());
                if ($this->GaUsuario->save($gaUsuario)) {
                    $this->Flash->success(__('Usuário salvo com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O usuário não pode ser salvo. Por favor tente novamente!'));
            }
            $this->set(compact('gaUsuario'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }


    }

    /**
     * Edit method
     *
     * @param string|null $id Ga Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->autorizado()){
            $gaUsuario = $this->GaUsuario->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $gaUsuario = $this->GaUsuario->patchEntity($gaUsuario, $this->request->getData());
                if ($this->GaUsuario->save($gaUsuario)) {
                    $this->Flash->success(__('Usuário editado com sucesso.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O usuário não pode ser salvo. Por favor tente novamente!'));
            }
            $this->set(compact('gaUsuario'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Ga Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->autorizado()){
            $this->request->allowMethod(['post', 'delete']);
            $gaUsuario = $this->GaUsuario->get($id);
            if ($this->GaUsuario->delete($gaUsuario)) {
                $this->Flash->success(__('O usuário foi excluído!'));
            } else {
                $this->Flash->error(__('O usuário não pode ser excluído. Por favor tente novamente'));
            }

            return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }


    }
}
