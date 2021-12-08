<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Singer Controller
 *
 * @property \App\Model\Table\SingerTable $Singer
 * @method \App\Model\Entity\Singer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SingerController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $this->paginate = [
            'limit' => '2',
        ];

        $singer = $this->paginate($this->Singer);

        $this->set(compact('singer'));
    }

    /**
     * View method
     *
     * @param string|null $id Singer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $singer = $this->Singer->get($id, [
            'contain' => ['Song'],
        ]);

        $this->set(compact('singer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $singer = $this->Singer->newEmptyEntity();
        if ($this->request->is('post')) {
            $singer = $this->Singer->patchEntity($singer, $this->request->getData());
            if ($this->Singer->save($singer)) {
                $this->Flash->success(__('El registra ha sido creado con exito!!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El registro no ha sido creado, por favor intente de nuevo más tarde.'));
        }
        $this->set(compact('singer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Singer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $singer = $this->Singer->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $singer = $this->Singer->patchEntity($singer, $this->request->getData());
            if ($this->Singer->save($singer)) {
                $this->Flash->success(__('El registra ha sido actualizado con exito!!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El registro no ha sido actualizado, por favor intente de nuevo más tarde.'));
        }
        $this->set(compact('singer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Singer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $singer = $this->Singer->get($id);
        if ($this->Singer->delete($singer)) {
            $this->Flash->success(__('El registra ha sido borrado satisfactoriamente!!'));
        } else {
            $this->Flash->error(__('El registro no ha sido borrado, por favor intente de nuevo más tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
