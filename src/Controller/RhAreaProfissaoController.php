<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\ForbiddenException;

/**
 * RhAreaProfissao Controller
 *
 * @property \App\Model\Table\RhAreaProfissaoTable $RhAreaProfissao
 *
 * @method \App\Model\Entity\RhAreaProfissao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RhAreaProfissaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function autorizado(){
        $aut = false;
        foreach($this->nivelUsuario as $nivel){
            if(($nivel->ga_nivel_acesso->sigla == "ADM") OR ($nivel->ga_nivel_acesso->sigla == "GRH")){
                $aut = true;
                break;
            }
        }
        return $aut;
    }

    public function index()
    {
        if($this->autorizado()){
            $rhAreaProfissao = $this->paginate($this->RhAreaProfissao);
            $this->set(compact('rhAreaProfissao'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }

    }

    /**
     * View method
     *
     * @param string|null $id Rh Area Profissao id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->autorizado()){
            $rhAreaProfissao = $this->RhAreaProfissao->get($id, [
                'contain' => [],
            ]);

            $this->set('rhAreaProfissao', $rhAreaProfissao);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
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
        $rhAreaProfissao = $this->RhAreaProfissao->newEmptyEntity();
        if ($this->request->is('post')) {
            $rhAreaProfissao = $this->RhAreaProfissao->patchEntity($rhAreaProfissao, $this->request->getData());
            if ($this->RhAreaProfissao->save($rhAreaProfissao)) {
                $this->Flash->success(__('Área de profissão salva com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A áre de profissão não pode ser salva. Por favor tente novamente!'));
        }
        $this->set(compact('rhAreaProfissao'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Rh Area Profissao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->autorizado()){
        $rhAreaProfissao = $this->RhAreaProfissao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rhAreaProfissao = $this->RhAreaProfissao->patchEntity($rhAreaProfissao, $this->request->getData());
            if ($this->RhAreaProfissao->save($rhAreaProfissao)) {
                $this->Flash->success(__('Área de profisão editada com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A área de profissão não pode se editada. Por favor tente novamente!'));
        }
        $this->set(compact('rhAreaProfissao'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Rh Area Profissao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->autorizado()){
        $this->request->allowMethod(['post', 'delete']);
        $rhAreaProfissao = $this->RhAreaProfissao->get($id);
        if ($this->RhAreaProfissao->delete($rhAreaProfissao)) {
            $this->Flash->success(__('A área de profissão foi excluída'));
        } else {
            $this->Flash->error(__('A área de profissão não pode ser excluída. Por favor tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }
}
