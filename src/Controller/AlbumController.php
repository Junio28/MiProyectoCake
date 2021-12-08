<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Album Controller
 *
 * @property \App\Model\Table\AlbumTable $Album
 * @method \App\Model\Entity\Album[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlbumController extends AppController
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
            'contain' => ['HomeMusic'],
        ];
        $album = $this->paginate($this->Album);

        $this->set(compact('album'));
    }

    /**
     * View method
     *
     * @param string|null $id Album id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $album = $this->Album->get($id, [
            'contain' => ['HomeMusic'],
        ]);

        $this->set(compact('album'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $album = $this->Album->newEmptyEntity();
        if ($this->request->is('post')) {
            $album = $this->Album->patchEntity($album, $this->request->getData());
            if ($this->Album->save($album)) {
                $this->Flash->success(__('El registro se ha guardado exitosamente!!..'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El registro no ha sido guardado, por favor intente de nuevo mas tarde.'));
        }
        $homeMusic = $this->Album->HomeMusic->find('list', ['limit' => 200])->all();
        $this->set(compact('album', 'homeMusic'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Album id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $album = $this->Album->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $album = $this->Album->patchEntity($album, $this->request->getData());
            if ($this->Album->save($album)) {
                $this->Flash->success(__('El registro se ha actualizado exitosamente!!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El registro no ha sido actualizado, por favor intente de nuevo mas tarde.'));
        }
        $homeMusic = $this->Album->HomeMusic->find('list', ['limit' => 200])->all();
        $this->set(compact('album', 'homeMusic'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Album id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $album = $this->Album->get($id);
        if ($this->Album->delete($album)) {
            $this->Flash->success(__('El registro se ha borrado satisfactoriamente!!.'));
        } else {
            $this->Flash->error(__('El registro no se ha eliminado, por favor intente de nuevo mas tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
