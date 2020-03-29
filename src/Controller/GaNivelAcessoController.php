<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\ForbiddenException;
/**
 * GaNivelAcesso Controller
 *
 * @property \App\Model\Table\GaNivelAcessoTable $GaNivelAcesso
 *
 * @method \App\Model\Entity\GaNivelAcesso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GaNivelAcessoController extends AppController
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
            $gaNivelAcesso = $this->paginate($this->GaNivelAcesso);

            $this->set(compact('gaNivelAcesso'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }

    }

    /**
     * View method
     *
     * @param string|null $id Ga Nivel Acesso id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->autorizado($this->nivelUsuario)){
            $gaNivelAcesso = $this->GaNivelAcesso->get($id, [
                'contain' => [],
            ]);

            $this->set('gaNivelAcesso', $gaNivelAcesso);
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
            $gaNivelAcesso = $this->GaNivelAcesso->newEmptyEntity();
            if ($this->request->is('post')) {
                $gaNivelAcesso = $this->GaNivelAcesso->patchEntity($gaNivelAcesso, $this->request->getData());
                if ($this->GaNivelAcesso->save($gaNivelAcesso)) {
                    $this->Flash->success(__('Nível de acesso salvo com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O nível de acesso não pode ser salvo. Por favor tente novamente!'));
                $validationErrors = $gaNivelAcesso->getErrors();
                foreach($validationErrors as $assoc) {
                    foreach ($assoc as $k => $v) {
                        $this->Flash->error(__($v));
                    }
                }
            }
            $this->set(compact('gaNivelAcesso'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }

    }

    /**
     * Edit method
     *
     * @param string|null $id Ga Nivel Acesso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->autorizado($this->nivelUsuario)){
            $gaNivelAcesso = $this->GaNivelAcesso->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $gaNivelAcesso = $this->GaNivelAcesso->patchEntity($gaNivelAcesso, $this->request->getData());
                if ($this->GaNivelAcesso->save($gaNivelAcesso)) {
                    $this->Flash->success(__('Nível de acesso editado com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O nível de acesso não pode ser salvo. Por favor tente novamente!'));
                $validationErrors = $gaNivelAcesso->getErrors();
                foreach($validationErrors as $assoc) {
                    foreach ($assoc as $k => $v) {
                        $this->Flash->error(__($v));
                    }
                }
            }
            $this->set(compact('gaNivelAcesso'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }

    }

    /**
     * Delete method
     *
     * @param string|null $id Ga Nivel Acesso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->autorizado($this->nivelUsuario)){
            $this->request->allowMethod(['post', 'delete']);
            $gaNivelAcesso = $this->GaNivelAcesso->get($id);
            if ($this->GaNivelAcesso->delete($gaNivelAcesso)) {
                $this->Flash->success(__('Nível de acesso excluído!'));
            } else {
                $this->Flash->error(__('O nível de acesso não pode ser salvo. Por favor tente novamente!'));
            }

            return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
            //return $this->redirect(['controller' => 'GaUsuario', 'action' => 'logout']);
        }

    }
}
