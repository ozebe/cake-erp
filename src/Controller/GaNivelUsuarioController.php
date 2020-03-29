<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\GaUsuario;
use Cake\Http\Exception\ForbiddenException;
/**
 * GaNivelUsuario Controller
 *
 * @property \App\Model\Table\GaNivelUsuarioTable $GaNivelUsuario
 *
 * @method \App\Model\Entity\GaNivelUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GaNivelUsuarioController extends AppController
{
    public function autorizado(){
        $aut = false;
        foreach($this->nivelUsuario as $nivel){
            if($nivel->ga_nivel_acesso->sigla == "ADM"){
                $aut = true;
                break;
            }
        }
        return $aut;
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if($this->autorizado($this->nivelUsuario)){
            //$query = $this->GaNivelUsuario->find('all')->contain(['GaUsuario', 'GaNivelAcesso']);
            //$this->set('query', $query);

            $gaNivelUsuario = $this->paginate($this->GaNivelUsuario->find('all')->contain(['GaUsuario', 'GaNivelAcesso']));
            $this->set(compact('gaNivelUsuario'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * View method
     *
     * @param string|null $id Ga Nivel Usuario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->autorizado($this->nivelUsuario)){
            $gaNivelUsuario = $this->GaNivelUsuario->get($id, [
                'contain' => [],
            ]);

            $this->set('gaNivelUsuario', $gaNivelUsuario);

            $query = $this->GaNivelUsuario->get($id, [
                'contain' => ['GaUsuario', 'GaNivelAcesso'],
            ]);

            $this->set('query', $query);
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
        if($this->autorizado($this->nivelUsuario)){
            $gaNivelUsuario = $this->GaNivelUsuario->newEmptyEntity();
            if ($this->request->is('post')) {
                $gaNivelUsuario = $this->GaNivelUsuario->patchEntity($gaNivelUsuario, $this->request->getData());
                if ($this->GaNivelUsuario->save($gaNivelUsuario)) {
                    $this->Flash->success(__('Usuário por nível salvo com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O usuário por nível não pode ser salvo. Por favor tente novamente!'));
            }
            $this->set(compact('gaNivelUsuario'));

            $nivel = $this->GaNivelUsuario->GaNivelAcesso->find('list',[
                'keyField' => 'id',
                'valueField' => 'descricao',
                'order' => 'descricao'
            ]);
            $this->set(compact('nivel'));

            $usuario = $this->GaNivelUsuario->GaUsuario->find('list',[
                'keyField' => 'id',
                'valueField' => 'usuario',
                'order' => 'usuario'
            ]);
            $this->set(compact('usuario'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }

    }

    /**
     * Edit method
     *
     * @param string|null $id Ga Nivel Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->autorizado($this->nivelUsuario)){
            $gaNivelUsuario = $this->GaNivelUsuario->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $gaNivelUsuario = $this->GaNivelUsuario->patchEntity($gaNivelUsuario, $this->request->getData());
                if ($this->GaNivelUsuario->save($gaNivelUsuario)) {
                    $this->Flash->success(__('Nível e respectivo usuário editado com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O usuário por nível não pode ser salvo. Por favor tente novamente!'));
            }
            $this->set(compact('gaNivelUsuario'));

            $nivel = $this->GaNivelUsuario->GaNivelAcesso->find('list',[
                'keyField' => 'id',
                'valueField' => 'descricao',
                'order' => 'descricao'
            ]);
            $this->set(compact('nivel'));

            $usuario = $this->GaNivelUsuario->GaUsuario->find('list',[
                'keyField' => 'id',
                'valueField' => 'usuario',
                'order' => 'usuario'
            ]);
            $this->set(compact('usuario'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }

    }

    /**
     * Delete method
     *
     * @param string|null $id Ga Nivel Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->autorizado($this->nivelUsuario)){
            $this->request->allowMethod(['post', 'delete']);
            $gaNivelUsuario = $this->GaNivelUsuario->get($id);
            if ($this->GaNivelUsuario->delete($gaNivelUsuario)) {
                $this->Flash->success(__('Respectivo nível por usuário excluído!'));
            } else {
                $this->Flash->error(__('O usuário por nível não pode ser salvo. Por favor tente novamente!'));
            }

            return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }
    }
}
