<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\ForbiddenException;

/**
 * RhTipoProfissao Controller
 *
 * @property \App\Model\Table\RhTipoProfissaoTable $RhTipoProfissao
 *
 * @method \App\Model\Entity\RhTipoProfissao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RhTipoProfissaoController extends AppController
{

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

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if($this->autorizado()){

            $rhTipoProfissao = $this->paginate($this->RhTipoProfissao->find('all')->contain('RhAreaProfissao'));
            $this->set('rhTipoProfissao', $rhTipoProfissao);

        $this->set(compact('rhTipoProfissao'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * View method
     *
     * @param string|null $id Rh Tipo Profissao id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->autorizado()){
        $rhTipoProfissao = $this->RhTipoProfissao->get($id, [
            'contain' => ['RhAreaProfissao'],
        ]);

        $this->set('rhTipoProfissao', $rhTipoProfissao);
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
        $rhTipoProfissao = $this->RhTipoProfissao->newEmptyEntity();
        if ($this->request->is('post')) {
            $rhTipoProfissao = $this->RhTipoProfissao->patchEntity($rhTipoProfissao, $this->request->getData());
            if ($this->RhTipoProfissao->save($rhTipoProfissao)) {
                $this->Flash->success(__('Tipo de profissão salva com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O tipo de profissão não pode ser salva. Por favor tente novamente!'));
            $validationErrors = $rhTipoProfissao->getErrors();
            foreach($validationErrors as $assoc) {
                foreach ($assoc as $k => $v) {
                    $this->Flash->error(__($v));
                }
            }
        }
        $rhAreaProfissao = $this->RhTipoProfissao->RhAreaProfissao->find('list', ['limit' => 200]);
        $this->set(compact('rhTipoProfissao', 'rhAreaProfissao'));

            $areaProfissao = $this->RhTipoProfissao->RhAreaProfissao->find('list',[
                'keyField' => 'id',
                'valueField' => 'descricao',
                'order' => 'descricao'
            ]);
            $this->set(compact('areaProfissao'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Rh Tipo Profissao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->autorizado()){
        $rhTipoProfissao = $this->RhTipoProfissao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rhTipoProfissao = $this->RhTipoProfissao->patchEntity($rhTipoProfissao, $this->request->getData());
            if ($this->RhTipoProfissao->save($rhTipoProfissao)) {
                $this->Flash->success(__('Tipo de profisão editada com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O tipo de profissão não pode ser salva. Por favor tente novamente!'));
            $validationErrors = $rhTipoProfissao->getErrors();
            foreach($validationErrors as $assoc) {
                foreach ($assoc as $k => $v) {
                    $this->Flash->error(__($v));
                }
            }
        }
        $rhAreaProfissao = $this->RhTipoProfissao->RhAreaProfissao->find('list', ['limit' => 200]);
        $this->set(compact('rhTipoProfissao', 'rhAreaProfissao'));

            $areaProfissao = $this->RhTipoProfissao->RhAreaProfissao->find('list',[
                'keyField' => 'id',
                'valueField' => 'descricao',
                'order' => 'descricao'
            ]);
            $this->set(compact('areaProfissao'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Rh Tipo Profissao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->autorizado()){
        $this->request->allowMethod(['post', 'delete']);
        $rhTipoProfissao = $this->RhTipoProfissao->get($id);
        if ($this->RhTipoProfissao->delete($rhTipoProfissao)) {
            $this->Flash->success(__('O tipo de profissão foi excluída'));
        } else {
            $this->Flash->error(__('O tipo de profissão não pode ser excluído. Por favor tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }
}
