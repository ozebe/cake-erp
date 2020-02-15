<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GaUsuario Controller
 *
 * @property \App\Model\Table\GaUsuarioTable $GaUsuario
 *
 * @method \App\Model\Entity\GaUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GaUsuarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $gaUsuario = $this->paginate($this->GaUsuario);

        $this->set(compact('gaUsuario'));
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
        $gaUsuario = $this->GaUsuario->get($id, [
            'contain' => [],
        ]);

        $this->set('gaUsuario', $gaUsuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gaUsuario = $this->GaUsuario->newEmptyEntity();
        if ($this->request->is('post')) {
            $gaUsuario = $this->GaUsuario->patchEntity($gaUsuario, $this->request->getData());
            if ($this->GaUsuario->save($gaUsuario)) {
                $this->Flash->success(__('The ga usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ga usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('gaUsuario'));
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
        $gaUsuario = $this->GaUsuario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gaUsuario = $this->GaUsuario->patchEntity($gaUsuario, $this->request->getData());
            if ($this->GaUsuario->save($gaUsuario)) {
                $this->Flash->success(__('The ga usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ga usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('gaUsuario'));
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
        $this->request->allowMethod(['post', 'delete']);
        $gaUsuario = $this->GaUsuario->get($id);
        if ($this->GaUsuario->delete($gaUsuario)) {
            $this->Flash->success(__('The ga usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The ga usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
