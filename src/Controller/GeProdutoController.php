<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\ForbiddenException;

/**
 * GeProduto Controller
 *
 * @property \App\Model\Table\GeProdutoTable $GeProduto
 *
 * @method \App\Model\Entity\GeProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeProdutoController extends AppController
{
    public function autorizado(){
        $aut = false;
        foreach($this->nivelUsuario as $nivel){
            if(($nivel->ga_nivel_acesso->sigla == "ADM") OR ($nivel->ga_nivel_acesso->sigla == "GE")){
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
        $geProduto = $this->paginate($this->GeProduto->find('all')->contain('GeSubGrupoProd'));
        $this->set(compact('geProduto'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * View method
     *
     * @param string|null $id Ge Produto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->autorizado()){
            $geProduto = $this->GeProduto->get($id, [
                'contain' => ['GeSubGrupoProd', 'GeEstoque', 'GeLote', 'GeUnidadeMassa', 'GeUnidadeMedida'],
            ]);

            $this->set('geProduto', $geProduto);
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
        $geProduto = $this->GeProduto->newEmptyEntity();
        if ($this->request->is('post')) {
            $geProduto = $this->GeProduto->patchEntity($geProduto, $this->request->getData());
            //se a tensão não tiver nada ele coloca como null
            if($geProduto->tensao == ''){
                $geProduto->tensao = null;
            }elseif ($geProduto->tensao == 0){
                $geProduto->tensao = '110V';
            }elseif ($geProduto->tensao == 1){
                $geProduto->tensao = '220V';
            }elseif ($geProduto->tensao == 2){
                $geProduto->tensao = 'Outros';
            }
            if ($this->GeProduto->save($geProduto)) {
                $this->Flash->success(__('Produto salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Produto não pode ser salvo. Por favor tente novamente!'));
        }
        $this->set(compact('geProduto'));

        $unidadeMedida = $this->GeProduto->GeUnidadeMedida->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'descricao'
        ]);
        $this->set(compact('unidadeMedida'));

        $unidadeMassa = $this->GeProduto->GeUnidadeMassa->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'descricao'
        ]);
        $this->set(compact('unidadeMassa'));

        $subGrupo = $this->GeProduto->GeSubGrupoProd->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'id_ge_grupo_prod'
        ]);
        $this->set(compact('subGrupo'));

        $estoque = $this->GeProduto->GeEstoque->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'descricao'
        ]);
        $this->set(compact('estoque'));

        $lote = $this->GeProduto->GeLote->find('list',[
            'keyField' => 'id',
            'valueField' => 'num_lote',
            'order' => ['criado' => 'DESC']
        ]);
        $this->set(compact('lote'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Ge Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->autorizado()){
        $geProduto = $this->GeProduto->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geProduto = $this->GeProduto->patchEntity($geProduto, $this->request->getData());
            //se a tensão não tiver nada ele coloca como null
            if($geProduto->tensao == ''){
                $geProduto->tensao = null;
            }elseif ($geProduto->tensao == 0){
                $geProduto->tensao = '110V';
            }elseif ($geProduto->tensao == 1){
                $geProduto->tensao = '220V';
            }elseif ($geProduto->tensao == 2){
                $geProduto->tensao = 'Outros';
            }
            if ($this->GeProduto->save($geProduto)) {
                $this->Flash->success(__('Produto editado com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Produto não pode se editado. Por favor tente novamente!'));
        }
        $this->set(compact('geProduto'));

        $unidadeMedida = $this->GeProduto->GeUnidadeMedida->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'descricao'
        ]);
        $this->set(compact('unidadeMedida'));

        $unidadeMassa = $this->GeProduto->GeUnidadeMassa->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'descricao'
        ]);
        $this->set(compact('unidadeMassa'));

        $subGrupo = $this->GeProduto->GeSubGrupoProd->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'id_ge_grupo_prod'
        ]);
        $this->set(compact('subGrupo'));

        $estoque = $this->GeProduto->GeEstoque->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'descricao'
        ]);
        $this->set(compact('estoque'));

        $lote = $this->GeProduto->GeLote->find('list',[
            'keyField' => 'id',
            'valueField' => 'num_lote',
            'order' => ['criado' => 'DESC']
        ]);
        $this->set(compact('lote'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }

    }

    /**
     * Delete method
     *
     * @param string|null $id Ge Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->autorizado()){
        $this->request->allowMethod(['post', 'delete']);
        $geProduto = $this->GeProduto->get($id);
        if ($this->GeProduto->delete($geProduto)) {
            $this->Flash->success(__('O Produto foi excluído'));
        } else {
            $this->Flash->error(__('O produto não pode ser excluído. Por favor tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }
}
