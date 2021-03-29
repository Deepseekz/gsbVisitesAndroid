<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Joueurs Controller
 *
 * @property \App\Model\Table\JoueursTable $Joueurs
 *
 * @method \App\Model\Entity\Joueur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JoueursController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {

        $joueurs->paginate = [
            'contain' => ['Equipes'],
            'order' => ['licence' => 'ASC']];

        $joueurs = $this->paginate($this->Joueurs);

        $this->set(compact('joueurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Joueur id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $joueur = $this->Joueurs->get($id, [
            'contain' => ['Rencontres']
        ]);

        $this->set('joueur', $joueur);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $joueur = $this->Joueurs->newEntity();
        if ($this->request->is('post')) {
            $joueur = $this->Joueurs->patchEntity($joueur, $this->request->getData());
            if ($this->Joueurs->save($joueur)) {
                $this->Flash->success(__('The joueur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The joueur could not be saved. Please, try again.'));
        }
        $rencontres = $this->Joueurs->Rencontres->find('list', ['limit' => 200]);
        $this->set(compact('joueur', 'rencontres'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Joueur id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $joueur = $this->Joueurs->get($id, [
            'contain' => ['Rencontres']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $joueur = $this->Joueurs->patchEntity($joueur, $this->request->getData());
            if ($this->Joueurs->save($joueur)) {
                $this->Flash->success(__('The joueur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The joueur could not be saved. Please, try again.'));
        }
        $rencontres = $this->Joueurs->Rencontres->find('list', ['limit' => 200]);
        $this->set(compact('joueur', 'rencontres'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Joueur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $joueur = $this->Joueurs->get($id);
        if ($this->Joueurs->delete($joueur)) {
            $this->Flash->success(__('The joueur has been deleted.'));
        } else {
            $this->Flash->error(__('The joueur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
